<?php

namespace App\Http\Controllers;
use App\Http\Controller\DB;
use App\Models\provinsi;
use App\Models\kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kota = Kota::with('provinsi')->get();
        return view('kota.index', compact('kota'));
    }

    
    public function create()
    {
        $provinsi = provinsi::all();
        return view ('kota.create', compact('provinsi'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'kode_kota' => 'required|max:10|unique:kotas',
            'nama_kota' => 'required|unique:kotas'
        ],   [
            'kode_kota.required' => 'Kode kota Tidak Boleh kosong',
            'Kode_kota.max' => 'Kode maksimal 10 karakter',
            'kode_kota.unique' => 'kode kota Sudah Terdaftar',
            'nama_kota.required' => 'Nama kota Tidak Boleh Kosong',
            'nama_kota.unique' => 'Nama kota Sudah Terdaftar'
        ]);
        $kota = new Kota;
        $kota->id_provinsi = $request->id_provinsi;
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->save();
        return redirect()->route('kota.index')->with(['message' => 'Data Kota Berhasil disimpan']);
    }

    
    public function show($id)
    {
        $kota = Kota::findOrFail($id);
        return view('kota.show', compact('kota'));
    }

    
    public function edit($id)
    {
        $kota = Kota::findOrFail($id);
        $provinsi = Provinsi::all();
        return view('kota.edit', compact('kota', 'provinsi'))->with(['message' => 'Data Kota Berhasil diedit']);
    }

    
    public function update(Request $request,$id)
    {
        $kota = Kota::findOrFail($id);
        $kota->id_provinsi = $request->id_provinsi;
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->save();
        return redirect()->route('kota.index')->with(['message' => 'Data Kota Berhasil disimpan']);
    }

    
    public function destroy($id)
    {
        $kota = kota::findOrFail($id)->delete();
        return redirect()->route('kota.index')->with(['message' => 'Data Berhasil dihapus']);
    }
}
