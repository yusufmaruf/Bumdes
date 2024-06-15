<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bumdes;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ReportSalesUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $idBumdes = Bumdes::where('idUser', auth()->user()->id)->pluck('idBumdes')->toArray();
            $query = Transaction::with('bumdes')
                ->orderBy('tanggal', 'desc')
                ->whereIn('idBumdes', $idBumdes);

            // Apply filters
            if ($request->has('bumdes') && !empty($request->bumdes)) {
                $query->where('idBumdes', $request->bumdes);
            }

            if ($request->has('dari') && !empty($request->dari)) {
                $query->whereDate('tanggal', '>=', $request->dari);
            }

            if ($request->has('sampai') && !empty($request->sampai)) {
                $query->whereDate('tanggal', '<=', $request->sampai);
            }

            $data = $query->get()->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('d F Y');
            })->map(function ($dayGroup) {
                return $dayGroup->groupBy('idBumdes');
            });

            return datatables()
                ->of($data->flatten(1)) // flattening to handle nested grouping
                ->addIndexColumn()
                ->addColumn('tanggal', function ($groupedData) {
                    return Carbon::parse($groupedData->first()->tanggal)->format('d F Y');
                })
                ->addColumn('bumdes', function ($groupedData) {
                    $firstTransaction = $groupedData->first();
                    return $firstTransaction->bumdes ? $firstTransaction->bumdes->name : 'N/A';
                })
                ->addColumn('Pemasukan', function ($groupedData) {
                    $totalPemasukan = $groupedData->where('category', 'pemasukan')->sum('total');
                    return $totalPemasukan > 0 ? 'Rp. ' . number_format($totalPemasukan, 0, ',', '.') : 0;
                })
                ->addColumn('aksi', function ($groupedData) {
                    $firstTransaction = $groupedData->first();
                    return '<a href="' . route('user.reportsalesuser.detail', $firstTransaction->tanggal) . '" class="btn btn-sm btn-primary"> <span class="far fa-eye"></span> Detail</a>';
                })
                ->rawColumns(['Pemasukan', 'tanggal', 'bumdes', 'aksi'])
                ->make(true);
        }
        $data = Bumdes::all();
        return view('layouts.pages.user.ReportSales.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Bumdes::all();
        return view('layouts.pages.user.ReportSales.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'total' => 'required',
            'idBumdes' => 'required|exists:App\Models\Bumdes,idBumdes',
            'tanggal' => 'required',
        ]);
        $data = $request->all();
        $data['user'] = auth()->user()->id;
        $data['category'] = 'pemasukan';
        Transaction::create($data);
        return redirect()->route('user.reportsalesuser.index')->with('success_message_create', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bumdes = Bumdes::where('idUser', auth()->user()->id)->get();

        $data = Transaction::find($id);
        return view('layouts.pages.user.ReportPurchase.edit', compact('data', 'bumdes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'total' => 'required',
            'idBumdes' => 'required|exists:App\Models\Bumdes,idBumdes',
            'tanggal' => 'required',
        ]);
        $data = $request->all();
        $data['user'] = auth()->user()->id;
        $data['category'] = 'pemasukan';
        Transaction::find($id)->update($data);
        return redirect()->route('user.reportsalesuser.index')->with('success_message_update', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Transaction::find($id)->delete();
        return redirect()->route('user.reportsalesuser.index')->with('success_message_delete', 'Data Berhasil Dihapus');
    }
    public function detail($date, Request $request)
    {
        $date = Carbon::parse($date)->format('Y-m-d');
        if ($request->ajax()) {
            $idBumdes = Bumdes::where('idUser', auth()->user()->id)->pluck('idBumdes')->toArray();
            $query = Transaction::with('bumdes')
                ->orderBy('created_at', 'desc')
                ->whereIn('idBumdes', $idBumdes)
                ->where('tanggal', $date)
                ->where('category', 'pemasukan');

            if ($request->has('bumdes') && !empty($request->bumdes)) {
                $query->where('idBumdes', $request->bumdes);
            }

            if ($request->has('dari') && !empty($request->dari)) {
                $query->whereDate('tanggal', '>=', $request->dari);
            }

            if ($request->has('sampai') && !empty($request->sampai)) {
                $query->whereDate('tanggal', '<=', $request->sampai);
            }

            $transactions = $query->get();

            return datatables()
                ->of($transactions)
                ->addIndexColumn()
                ->addColumn('tanggal', function ($transaction) {
                    return Carbon::parse($transaction->tanggal)->format('d F Y');
                })
                ->addColumn('bumdes', function ($transaction) {
                    return $transaction->bumdes ? $transaction->bumdes->name : 'N/A';
                })
                ->addColumn('Pemasukan', function ($transaction) {
                    return $transaction->total > 0 ? 'Rp. ' . number_format($transaction->total, 0, ',', '.') : 'Rp. 0';
                })
                ->addColumn('aksi', function ($transaction) {
                    $editUrl = route('user.reportsalesuser.edit', $transaction->idTransaction);
                    $deleteUrl = route('user.reportsalesuser.destroy', $transaction->idTransaction);
                    $csrfToken = csrf_token();
                    return '<a href="' . $editUrl . '" class="btn btn-sm btn-primary"> <span class="far fa-edit"></span> Edit</a>
                        <form action="' . $deleteUrl . '" method="POST" style="display:inline;">
                            ' . method_field('DELETE') . csrf_field() . '
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this transaction?\')">
                                <span class="far fa-trash-alt"></span> Hapus
                            </button>
                        </form>';
                })


                ->rawColumns(['Pemasukan', 'tanggal', 'bumdes', 'aksi'])
                ->make(true);
        }

        $data = Bumdes::where('idUser', auth()->user()->id)->get();
        return view('layouts.pages.user.ReportSales.detail', compact('data', 'date'));
    }
}
