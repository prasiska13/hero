<?php

namespace App\Http\Controllers;

use App\Models\kasus;
use Illuminate\Http\Request;

class KasusController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(kasus $kasus)
    {
        //
    }


    public function edit(kasus $kasus)
    {
        //
    }


    public function update(Request $request, kasus $kasus)
    {
        //
    }



    public function destroy(kasus $kasus)
    {
        //
    }
}
