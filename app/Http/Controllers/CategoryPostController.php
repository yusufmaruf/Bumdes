<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryPost $categoryPost)
    {
        //
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
    public function update(Request $request, CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryPost $categoryPost)
    {
        //
    }
}
