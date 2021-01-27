<?php

namespace App\Http\Controllers;

use App\Models\country;
use Illuminate\Http\Request;

class CountryController extends Controller
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

    
    public function show(country $country)
    {
        //
    }

    
    public function edit(country $country)
    {
        //
    }

    
    public function update(Request $request, country $country)
    {
        //
    }

    
    public function destroy(country $country)
    {
        //
    }
}
