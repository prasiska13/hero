<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;
use App\Http\Controller\DB;
class ProvinsiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $provinsi = Provinsi::all();
        return view('provinsi.index',compact('provinsi'));
    }

    public function create()
    {
        return view('provinsi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_provinsi' => 'required|max:10|unique:provinsis',
            'nama_provinsi' => 'required|unique:provinsis'
        ],   [
            'kode_provinsi.required' => 'Kode Provinsi Tidak Boleh kosong',
            'Kode_provinsi.max' => 'Kode maksimal 10 karakter',
            'kode_provinsi.unique' => 'kode Provinsi Sudah Terdaftar',
            'nama_provinsi.required' => 'Nama Provinsi Tidak Boleh Kosong',
            'nama_provinsi.unique' => 'Nama Provinsi Sudah Terdaftar'
        ]);
        $provinsi = new provinsi;
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }

    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show',compact('provinsi'));
    }

    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit', compact('provinsi'));
    }

    public function update(Request $request, $id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with(['message' => 'Data Provinsi berhasil di edit']);
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id)->delete();
        return redirect()->route('provinsi.index')->with(['message' => 'Data Berhasil dihapus']);
    }
}
