<?php

namespace App\Http\Controllers;

use App\Models\banners;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = banners::orderBy('created_at', 'desc')->get();
            return datatables()
                ->of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($data) {
                    return view('layouts.pages.admin.banner.tombol', ['data' => $data]);
                })
                ->addColumn('image', function ($data) {
                    return '<img src="' . asset($data->images) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->rawColumns(['aksi', 'image'])
                ->make(true);
        }

        return view('layouts.pages.admin.Banner.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.admin.Banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $data = $request->all();
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/banner'), $filename);
            $data['images'] = '/store/banner/' . $filename;
        }
        $user = banners::create($data);
        if ($user) {
            return redirect()->route('admin.banner.index')->with('success_messages_create', 'Banner Berhasil dibuat');
        } else {
            return redirect()->route('admin.banner.index')->with('error_messages_create', 'Banner Gagal dibuat');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = banners::where('idBanner', $id)->first();
        return response()->json(['result' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = banners::where('idBanner', $id)->first();
        return view('layouts.pages.admin.Banner.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $banner = banners::where('idBanner', $id)->first();
        $request->validate([
            'name' => 'required',
        ]);
        $data = $request->all();
        if ($request->hasFile('images')) {
            if ($banner->images && file_exists(public_path($banner->images))) {
                unlink(public_path($banner->images));
            }
            $file = $request->file('images');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/banner'), $filename);
            $data['images'] = '/store/banner/' . $filename;
        }
        $banner->update($data);
        if ($banner) {
            return redirect()->route('admin.banner.index')->with('success_message_update', 'Banner Berhasil diupdate');
        } else {
            return redirect()->route('admin.banner.index')->with('error_message_update', 'Banner Gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = banners::findOrFail($id);
        if ($data->images && file_exists(public_path($data->images))) {
            unlink(public_path($data->images));
        }
        $data->delete();
        return redirect()->route('admin.banner.index')->with('success_messages_delete', 'Banner Berhasil dihapus');
    }
}
