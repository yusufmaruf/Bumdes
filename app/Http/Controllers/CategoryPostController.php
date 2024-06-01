<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\CategoryPost;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $categoryPost = CategoryPost::orderBy('created_at', 'desc')->get();
            return datatables()
                ->of($categoryPost)
                ->addIndexColumn()
                ->addColumn('aksi', function ($categoryPost) {
                    return view('layouts.pages.admin.CategoryPost.tombol', ['data' => $categoryPost]);
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('layouts.pages.admin.CategoryPost.index');
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
            'title' => 'required'
        ]);
        $categoryPost = $request->all();
        $categoryPost['slug'] = Str::slug($request->title, '-');
        CategoryPost::create($categoryPost);
        return back()->with('success_message_create', 'Data Kategori Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = CategoryPost::where('idCategoryPost', $id)->first();
        return response()->json(['result' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $categoryPost = CategoryPost::where('idCategoryPost', $id)->first();
        $data = $request->all();
        $data['slug'] = Str::slug($request->title, '-');
        $categoryPost->update($data);
        return back()->with('success_message_update', 'Data Kategori Berhasi Diubah');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $categoryPost = CategoryPost::where('idCategoryPost', $id)->first();
            $categoryPost->delete();
            return back()->with('success_message_delete', 'Data berhasil di hapus');
        } catch (\Throwable $th) {
            return back()->with('error_message_delete', 'Gagal Menghapus Data ');
        }
        //
    }
}
