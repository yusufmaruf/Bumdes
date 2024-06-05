<?php

namespace App\Http\Controllers;

use App\Models\SiteIdentity;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
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
                    return view('layouts.pages.admin.VisiMisi.tombol', ['data' => $data]);
                })
                ->addColumn('visi', function ($data) {
                    return substr($data->visi, 0, 50) . '...';
                })
                ->addColumn('misi', function ($data) {
                    return substr($data->misi, 0, 50) . '...';
                })
                ->addColumn('regulasi', function ($data) {
                    return substr($data->regulasi, 0, 50) . '...';
                })
                ->rawColumns(['aksi', 'visi', 'misi', 'regulasi'])
                ->make(true);
        }
        return view('layouts.pages.admin.VisiMisi.index');
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
    public function edit($id)
    {
        $data = SiteIdentity::where('idSiteIdentity', $id)->first();
        return view('layouts.pages.admin.VisiMisi.edit', ['data' => $data]);
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
