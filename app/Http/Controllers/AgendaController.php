<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Agenda::orderBy('created_at', 'desc')->get();
            return datatables()
                ->of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($data) {
                    return view('layouts.pages.admin.agenda.tombol', ['data' => $data]);
                })
                ->addColumn('image', function ($data) {
                    return '<img src="' . asset($data->photo) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->addColumn('date', function ($data) {
                    return date('d F Y', strtotime($data->date));
                })
                ->addColumn('waktuMulai', function ($data) {
                    return date('H:i', strtotime($data->waktuMulai));
                })
                ->addColumn('waktuSelesai', function ($data) {
                    return date('H:i', strtotime($data->waktuSelesai));
                })
                ->addColumn('description', function ($data) {
                    return substr($data->description, 0, 50) . '...';
                })
                ->rawColumns(['aksi', 'image', 'date', 'waktuMulai', 'waktuSelesai', 'description'])
                ->make(true);
        }
        return view('layouts.pages.admin.agenda.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.admin.agenda.create');
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
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda)
    {
        //
    }
}
