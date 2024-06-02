<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use App\Models\JenisUsaha;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class BumdesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $bumdes = Bumdes::orderBy('created_at', 'desc')->get();
            return datatables()
                ->of($bumdes)
                ->addIndexColumn()
                ->addColumn('aksi', function ($bumdes) {
                    return view('layouts.pages.admin.bumdes.tombol', ['data' => $bumdes]);
                })
                ->addColumn('image', function ($bumdes) {
                    return '<img src="' . asset($bumdes->logo) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->rawColumns(['aksi', 'image'])
                ->make(true);
        }
        return view('layouts.pages.admin.bumdes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = JenisUsaha::all();
        return view('layouts.pages.admin.bumdes.create', ['data' => $data]);
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
    public function show(Bumdes $bumdes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bumdes $bumdes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bumdes $bumdes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bumdes $bumdes)
    {
        //
    }
}
