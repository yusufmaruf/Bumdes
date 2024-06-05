<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ReportSalesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if (auth()->user()->role == 'admin') {
                $data = Transaction::where('category', 'pemasukan')->orderBy('created_at', 'desc')->get();
            } else {
                $idbumdes = Transaction::where('idUser', auth()->user()->id)->orderBy('created_at', 'desc')->get();
                $data = Transaction::where('idBumdes', $idbumdes->idBumdes)->orderBy('created_at', 'desc')->get();
            }
            return datatables()
                ->of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('layouts.pages.admin.ReportSales.index');
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
