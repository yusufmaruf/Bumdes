<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class editProfilPengguna extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data = User::find($id);
        return view('layouts.pages.updateProfile.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
            return redirect()->back()->with('success_message_update', 'Data Pengguna Berhasil Diubah');
        } else {
            return redirect()->back()->with('error_message_delete', 'Data Pengguna Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
