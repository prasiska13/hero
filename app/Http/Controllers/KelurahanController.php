<?php

namespace App\Http\Controllers;
use App\Http\Controller\DB;
use App\Models\kecamatan;
use App\Models\kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kelurahan = kelurahan::with('kecamatan')->get();
        return view('kelurahan.index', compact('kelurahan'));
    }

    
    public function create()
    {
        $kecamatan = kecamatan::all();
        return view ('kelurahan.create', compact('kecamatan'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'kode_kelurahan' => 'required|max:10|unique:kelurahans',
            'nama_kelurahan' => 'required|unique:kelurahans'
        ],   [
            'kode_kelurahan.required' => 'Kode kelurahan Tidak Boleh kosong',
            'Kode_kelurahan.max' => 'Kode maksimal 10 karakter',
            'kode_kelurahan.unique' => 'kode kelurahan Sudah Terdaftar',
            'nama_kelurahan.required' => 'Nama kelurahan Tidak Boleh Kosong',
            'nama_kelurahan.unique' => 'Nama kelurahan Sudah Terdaftar'
        ]);
        $kelurahan = new kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->kode_kelurahan = $request->kode_kelurahan;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message' => 'Data kelurahan Berhasil disimpan']);
    }

    
    public function show($id)
    {
        $kelurahan = kelurahan::findOrFail($id);
        return view('kelurahan.show', compact('kelurahan'));
    }

    
    public function edit($id)
    {
        $kelurahan = kelurahan::findOrFail($id);
        $kecamatan = kecamatan::all();
        return view('kelurahan.edit', compact('kelurahan', 'kecamatan'))->with(['message' => 'Data kelurahan Berhasil diedit']);
    }

    
    public function update(Request $request,$id)
    {
        $kelurahan = kelurahan::findOrFail($id);
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->kode_kelurahan = $request->kode_kelurahan;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message' => 'Data kelurahan Berhasil disimpan']);
    }

    
    public function destroy($id)
    {
        $kelurahan = kelurahan::findOrFail($id)->delete();
        return redirect()->route('kelurahan.index')->with(['message' => 'Data Berhasil dihapus']);
    }
}
