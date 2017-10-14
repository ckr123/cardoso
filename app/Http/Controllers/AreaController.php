<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $files = collect(config('cardoso.area'));
        return view('public.area', compact('files'));
    }
}
