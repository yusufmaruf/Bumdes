<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Gallery::orderBy('created_at', 'desc')->get();
            return datatables()
                ->of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($data) {
                    return view('layouts.pages.admin.Gallery.tombol', ['data' => $data]);
                })
                ->addColumn('image', function ($data) {
                    return '<img src="' . asset($data->photo) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->rawColumns(['aksi', 'image'])
                ->make(true);
        }

        return view('layouts.pages.admin.Gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.admin.Gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/gallery'), $filename);
            $data['photo'] = '/store/gallery/' . $filename;
        }
        $gallery = Gallery::create($data);
        if ($gallery) {
            return redirect()->route('admin.gallery.index')->with('success_message_create', 'Data Berhasil Dibuat');
        } else {
            return redirect()->route('admin.gallery.index')->with('error_message_create', 'Data Gagal Dibuat');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Gallery::find($id);
        return response()->json(['result' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('layouts.pages.admin.Gallery.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $request->validate([
            'name' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vidio' => 'string'
        ]);

        $data = $request->all();
        if ($request->hasFile('photo')) {
            if ($gallery->photo && file_exists(public_path($gallery->photo))) {
                unlink(public_path($gallery->photo));
            }
            $file = $request->file('photo');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/gallery'), $filename);
            $data['photo'] = '/store/gallery/' . $filename;
        }
        $gallery->update($data);
        if ($gallery) {
            return redirect()->route('admin.gallery.index')->with('success_message_update', 'Data Berhasil Dibuat');
        } else {
            return redirect()->route('admin.gallery.index')->with('error_message_update', 'Data Gagal Dibuat');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Gallery::find($id);
        if ($data->photo && file_exists(public_path('store/photoprofil/' . $data->image))) {
            unlink(public_path($data->photo));
        }
        $data->delete();
        if ($data) {
            return redirect()->route('admin.gallery.index')->with('success_message_delete', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.gallery.index')->with('error_message_delete', 'Data Gagal Dihapus');
        }
    }
}
