<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $pengguna = User::orderBy('created_at', 'desc')->get();
            return datatables()
                ->of($pengguna)
                ->addIndexColumn()
                ->addColumn('aksi', function ($pengguna) {
                    return view('layouts.pages.admin.pengguna.tombol', ['data' => $pengguna]);
                })
                ->addColumn('image', function ($pengguna) {
                    return '<img src="' . asset($pengguna->photo) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->rawColumns(['aksi', 'image'])
                ->make(true);
        }

        return view('layouts.pages.admin.pengguna.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.admin.pengguna.create');
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
        $data = User::where('id', $id)->first();
        return response()->json(['result' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return view('layouts.pages.admin.pengguna.edit', ['data' => $data]);
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
