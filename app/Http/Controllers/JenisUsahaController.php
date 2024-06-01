<?php

namespace App\Http\Controllers;

use App\Models\JenisUsaha;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class JenisUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $category = JenisUsaha::orderBy('created_at', 'desc')->get();
            return datatables()
                ->of($category)
                ->addIndexColumn()
                ->addColumn('aksi', function ($category) {
                    return view('layouts.pages.admin.JenisUnitUsaha.tombol', ['data' => $category]);
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('layouts.pages.admin.JenisUnitUsaha.index');
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
        $request->validate([
            'name' => 'required'
        ]);
        $category = $request->all();
        $category['slug'] = Str::slug($request->name, '-');
        JenisUsaha::create($category);
        return back()->with('success_message_create', 'Data Kategori Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = JenisUsaha::where('idJenisUsaha', $id)->first();
        return response()->json(['result' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisUsaha $jenisUsaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);
        $category = JenisUsaha::where('idJenisUsaha', $id)->first();
        $data = $request->all();
        $data['slug'] = Str::slug($request->name, '-');
        $category->update($data);
        return back()->with('success_message_update', 'Data Kategori Berhasi Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $category = JenisUsaha::where('idJenisUsaha', $id)->first();
            $category->delete();
            return back()->with('success_message_delete', 'Data berhasil di hapus');
        } catch (\Throwable $th) {
            return back()->with('error_message_delete', 'Gagal Menghapus Data ');
        }
    }
}
