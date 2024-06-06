<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Post::orderBy('created_at', 'desc')->with(['categoryPost', 'user'])->get();
            return datatables()
                ->of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($data) {
                    return view('layouts.pages.admin.berita.tombol', ['data' => $data]);
                })
                ->addColumn('image', function ($data) {
                    return '<img src="' . asset($data->images) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->addColumn('date', function ($data) {
                    return date('d F Y', strtotime($data->created_at));
                })
                ->addColumn('description', function ($data) {
                    return substr($data->body, 0, 50) . '...';
                })
                ->addColumn('user', function ($data) {
                    return $data->user->name;
                })
                ->addColumn('category', function ($data) {
                    return $data->categoryPost->title;
                })
                ->rawColumns(['aksi', 'image', 'date', 'description', 'user', 'category'])
                ->make(true);
        }
        return view('layouts.pages.admin.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = CategoryPost::all();
        return view('layouts.pages.admin.berita.create', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idCategoryPost' => 'required',
        ]);
        $data = $request->all();
        $data['slug'] = str_replace(' ', '-', $request->title);
        $data['idUser'] = auth()->user()->id;
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/postPhoto'), $filename);
            $data['images'] = '/store/postPhoto/' . $filename;
        }
        $post = Post::create($data);
        if ($post) {
            return redirect()->route('admin.berita.index')->with('success_message_create', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.berita.index')->with('error_message_create', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Post::where('idPost', $id)->first();
        return response()->json(['result' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Post::find($id)->with(['categoryPost', 'user'])->first();
        $category = CategoryPost::all();
        return view('layouts.pages.admin.berita.edit', ['data' => $data, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idCategoryPost' => 'required',
        ]);
        $data = $request->all();
        $data['slug'] = str_replace(' ', '-', $request->title);
        if ($request->hasFile('images')) {
            if ($post->images && file_exists(public_path($post->images))) {
                unlink(public_path($post->images));
            }
            $file = $request->file('images');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/postPhoto'), $filename);
            $data['images'] = '/store/postPhoto/' . $filename;
        }
        $post->update($data);
        if ($post) {
            return redirect()->route('admin.berita.index')->with('success_message_update', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('admin.berita.index')->with('error_message_update', 'Data Gagal Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post->images && file_exists(public_path($post->images))) {
            unlink(public_path($post->images));
        }
        $post->delete();
        if ($post) {
            return redirect()->route('admin.berita.index')->with('success_message_delete', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.berita.index')->with('error_message_delete', 'Data Gagal Dihapus');
        }
    }
}
