<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategroyController extends Controller
{
    public function index()
    {
        
        return view('admin.category.index');
    }

    public function create(Request $request)
    {
        dd($request);
    }
}
