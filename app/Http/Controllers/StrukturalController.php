<?php

namespace App\Http\Controllers;

use App\Models\SiteIdentity;
use Illuminate\Http\Request;

class StrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = SiteIdentity::latest()->get();
            return datatables()
                ->of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($data) {
                    return view('layouts.pages.admin.StrukturalLogo.tombol', ['data' => $data]);
                })
                ->addColumn('gambarStruktur', function ($data) {
                    return '<img src="' . asset($data->gambarStruktur) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->addColumn('logo', function ($data) {
                    return '<img src="' . asset($data->logo) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->rawColumns(['aksi', 'gambarStruktur', 'logo'])
                ->make(true);
        }
        return view('layouts.pages.admin.StrukturalLogo.index');
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
