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
    public function edit($id)
    {
        $data = SiteIdentity::where('idSiteIdentity', $id)->first();
        return view('layouts.pages.admin.StrukturalLogo.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'gambarStruktur' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
        ]);
        $site = SiteIdentity::where('idSiteIdentity', $id)->first();
        $data = $request->all();
        if ($request->hasFile('logo')) {
            if ($site->logo && file_exists(public_path($site->logo))) {
                unlink(public_path($site->logo));
            }
            $file = $request->file('logo');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/logo'), $filename);
            $data['logo'] = '/store/logo/' . $filename;
        }
        if ($request->hasFile('gambarStruktur')) {
            if ($site->gambarStruktur && file_exists(public_path($site->gambarStruktur))) {
                unlink(public_path($site->gambarStruktur));
            }
            $file = $request->file('gambarStruktur');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/gambarStruktur'), $filename);
            $data['gambarStruktur'] = '/store/gambarStruktur/' . $filename;
        }

        $site->update($data);
        return redirect()->route('admin.struktural.index')->with('success_message', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
