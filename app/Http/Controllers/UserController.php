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
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'required|in:admin,user',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required|in:Laki - laki,Perempuan',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/photoprofil'), $filename);
            $data['photo'] = '/store/photoprofil/' . $filename;
        }

        $user = User::create($data);

        if ($user) {
            return redirect()->route('admin.pengguna.index')->with('success_message', 'Data Pengguna Berhasil Dibuat');
        } else {
            return redirect()->route('admin.pengguna.index')->with('error_message', 'Data Pengguna Gagal Dibuat');
        }
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
    public function update(Request $request,  $id)
    {
        $user = User::where('id', $id)->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id,

            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'required|in:admin,user',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required|in:Laki - laki,Perempuan',
        ]);

        $data = $request->all();
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            $data['password'] = $user->password;
        }

        if ($request->hasFile('photo')) {
            if ($user->photo && file_exists(public_path($user->photo))) {
                unlink(public_path($user->photo));
            }
            $file = $request->file('photo');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/photoprofil'), $filename);
            $data['photo'] = '/store/photoprofil/' . $filename;
        }
        $user->update($data);
        if ($user) {
            return redirect()->route('admin.pengguna.index')->with('success_message_update', 'Data Pengguna Berhasil Diubah');
        } else {
            return redirect()->route('admin.pengguna.index')->with('error_message_delete', 'Data Pengguna Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        if ($data->photo && file_exists(public_path('store/photoprofil/' . $data->image))) {
            unlink(public_path($data->photo));
        }
        $data->delete();
        if ($data) {
            return redirect()->route('admin.pengguna.index')->with('success_message_delete', 'Data Pengguna Berhasil Dihapus');
        } else {
            return redirect()->route('admin.pengguna.index')->with('error_message_delete', 'Data Pengguna Gagal Dihapus');
        }
    }
}
