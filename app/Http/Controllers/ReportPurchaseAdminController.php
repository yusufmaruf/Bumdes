<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Bumdes;

class ReportPurchaseAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Transaction::with('bumdes')->orderBy('tanggal', 'desc');

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
                return Carbon::parse($date->tanggal)->format('d F Y');
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
                ->addColumn('Pengeluaran', function ($groupedData) {
                    $totalPengeluaran = $groupedData->where('category', 'pengeluaran')->sum('total');
                    return $totalPengeluaran > 0 ? 'Rp. ' . number_format($totalPengeluaran, 0, ',', '.') : 'Rp. 0';
                })
                ->rawColumns(['Pengeluaran', 'tanggal', 'bumdes'])
                ->make(true);
        }
        $data = Bumdes::all();
        return view('layouts.pages.admin.ReportPurchase.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
