<?php

namespace App\Http\Controllers;
use App\Http\Controller\DB;
use App\Models\kelurahan;
use App\Models\rw;
use Illuminate\Http\Request;

class RwController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $rw = Rw::with('kelurahan')->get();
        return view('rw.index', compact('rw'));
    }


    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view ('rw.create', compact('kelurahan'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_rw' => 'required|unique:rws'
        ],   [
            'nama_rw.required' => 'Nama rw Tidak Boleh Kosong',
            'nama_rw.unique' => 'Nama rw Sudah Terdaftar'
        ]);
        $rw = new Rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->nama_rw = $request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')->with(['message' => 'Data Rw Berhasil disimpan']);
    }


    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        return view('rw.show', compact('rw'));
    }


    public function edit($id)
    {
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('rw.edit', compact('rw', 'kelurahan'))->with(['message' => 'Data Rw Berhasil diedit']);
    }


    public function update(Request $request,$id)
    {
        $rw = Rw::findOrFail($id);
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->nama_rw = $request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')->with(['message' => 'Data Rw Berhasil disimpan']);
    }


    public function destroy($id)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')->with(['message' => 'Data Rw Berhasil diHapus']);
    }
}
