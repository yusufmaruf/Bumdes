<?php

namespace App\Http\Controllers;

use App\Models\SiteIdentity;
use Illuminate\Http\Request;

class SosialMediaController extends Controller
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
                    return view('layouts.pages.admin.SosialMedia.tombol', ['data' => $data]);
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('layouts.pages.admin.SosialMedia.index');
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
        $data = SiteIdentity::find($id);
        return view('layouts.pages.admin.SosialMedia.edit', compact('data'));
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
