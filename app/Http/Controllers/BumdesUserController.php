<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use App\Models\JenisUsaha;
use Illuminate\Http\Request;

class BumdesUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $bumdes = Bumdes::orderBy('created_at', 'desc')->with(['jenisUsaha', 'user'])->where('idUser', auth()->user()->id)->get();
            return datatables()
                ->of($bumdes)
                ->addIndexColumn()
                ->addColumn('aksi', function ($bumdes) {
                    return view('layouts.pages.user.bumdes.tombol', ['data' => $bumdes]);
                })
                ->addColumn('description', function ($bumdes) {
                    return substr($bumdes->desc, 0, 50) . '...';
                })
                ->addColumn('user', function ($bumdes) {
                    return $bumdes->user->name;
                })
                ->addColumn('jenisUsaha', function ($bumdes) {
                    return $bumdes->jenisUsaha->name;
                })
                ->addColumn('image', function ($bumdes) {
                    return '<img src="' . asset($bumdes->logo) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->rawColumns(['aksi', 'image', 'description', 'user', 'jenisUsaha'])
                ->make(true);
        }
        return view('layouts.pages.user.bumdes.index');
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
    public function show($id)
    {
        $data = Bumdes::find($id);
        return response()->json(['result' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bumdes = Bumdes::find($id);
        $data = JenisUsaha::all();
        return view('layouts.pages.admin.bumdes.edit', ['data' => $bumdes, 'dataJenisUsaha' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $bumdes = Bumdes::find($id);
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lokasi' => 'required',
            'phoneNumber' => 'required',
            'maps' => 'required',
            'idJenisUsaha' => 'required|exists:App\Models\JenisUsaha,idJenisUsaha',
        ]);
        $data = $request->all();
        if ($request->hasFile('logo')) {
            if ($bumdes->logo && file_exists(public_path($bumdes->logo))) {
                unlink(public_path($bumdes->logo));
            }
            $file = $request->file('logo');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/bumdes'), $filename);
            $data['logo'] = '/store/bumdes/' . $filename;
        }
        $bumdes->update($data);
        if ($bumdes) {
            return redirect()->route('user.bumdesUser.index')->with('success_message_update', 'Data Bumdes Berhasil Diubah');
        } else {
            return redirect()->route('user.bumdesUser.index')->with('error_message_update', 'Data Bumdes Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bumdes = Bumdes::find($id);
        if ($bumdes->logo && file_exists(public_path($bumdes->logo))) {
            unlink(public_path($bumdes->logo));
        }
        $bumdes->delete();
        if ($bumdes) {
            return redirect()->route('admin.bumdes.index')->with('success_message_delete', 'Data Bumdes Berhasil Dihapus');
        } else {
            return redirect()->route('admin.bumdes.index')->with('error_message_delete', 'Data Bumdes Gagal Dihapus');
        }
    }
}
