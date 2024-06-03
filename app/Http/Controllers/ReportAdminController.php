<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ReportAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Transaction::orderBy('created_at', 'desc')->get();
            return datatables()
                ->of($data)
                ->addIndexColumn()
                ->addColumn('pemasukan', function ($data) {
                    if ($data->category == 'pemasukan') {
                        return $data->total;
                    } else {
                        return "";
                    }
                })
                ->addColumn('pengeluaran', function ($data) {
                    if ($data->category == 'pengeluaran') {
                        return $data->total;
                    } else {
                        return "";
                    }
                })
                ->rawColumns(['pemasukan', 'pengeluaran'])
                ->make(true);
        }
        return view('layouts.pages.admin.ReportPurchase.index');
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
