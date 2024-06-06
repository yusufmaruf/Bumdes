<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Agenda::orderBy('created_at', 'desc')->get();
            return datatables()
                ->of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($data) {
                    return view('layouts.pages.admin.agenda.tombol', ['data' => $data]);
                })
                ->addColumn('image', function ($data) {
                    return '<img src="' . asset($data->photo) . '" alt="" width="32px" height="22px" srcset="">';
                })
                ->addColumn('date', function ($data) {
                    return date('d F Y', strtotime($data->date));
                })
                ->addColumn('waktuMulai', function ($data) {
                    return date('d F Y H:i', strtotime($data->waktuMulai));
                })
                ->addColumn('waktuSelesai', function ($data) {
                    return date('d F Y H:i', strtotime($data->waktuSelesai));
                })
                ->addColumn('description', function ($data) {
                    return substr($data->desc, 0, 50) . '...';
                })
                ->rawColumns(['aksi', 'image', 'date', 'waktuMulai', 'waktuSelesai', 'description'])
                ->make(true);
        }
        return view('layouts.pages.admin.agenda.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.admin.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'waktuMulai' => 'required|date|before:waktuSelesai',
            'waktuSelesai' => 'required|date|after:waktuMulai',
            'desc' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/agenda'), $filename);
            $data['photo'] = '/store/agenda/' . $filename;
        }

        $agenda = Agenda::create($data);
        if ($agenda) {
            return redirect()->route('admin.agenda.index')->with('success_message_create', 'Agenda created successfully');
        } else {
            return redirect()->route('admin.agenda.index')->with('error_message_create', 'Agenda created failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Agenda::where('idAgenda', $id)->first();
        return response()->json(['result' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Agenda::where('idAgenda', $id)->first();
        return view('layouts.pages.admin.agenda.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $agenda = Agenda::find($id);
        $request->validate([
            'name' => 'required',
            'waktuMulai' => 'required|date|before:waktuSelesai',
            'waktuSelesai' => 'required|date|after:waktuMulai',
            'desc' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        if ($request->hasFile('photo')) {
            if ($agenda->photo && file_exists(public_path($agenda->photo))) {
                unlink(public_path($agenda->photo));
            }
            $file = $request->file('photo');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalName . '_' . time() . '.' . $extension;
            $file->move(public_path('store/agenda'), $filename);
            $data['photo'] = '/store/agenda/' . $filename;
        }
        $agenda->update($data);
        if ($agenda) {
            return redirect()->route('admin.agenda.index')->with('success_message_update', 'Agenda updated successfully');
        } else {
            return redirect()->route('admin.agenda.index')->with('error_message_update', 'Agenda updated failed');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        if ($agenda->photo && file_exists(public_path($agenda->photo))) {
            unlink(public_path($agenda->photo));
        }
        $agenda->delete();

        if ($agenda) {
            return redirect()->route('admin.agenda.index')->with('success_message_delete', 'Agenda deleted successfully');
        } else {
            return redirect()->route('admin.agenda.index')->with('error_message_delete', 'Agenda deleted failed');
        }
    }
}
