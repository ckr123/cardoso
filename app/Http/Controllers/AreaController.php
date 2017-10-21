<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $photos = collect(config('cardoso.area'));
        return view('public.area', compact('photos'));
    }
}
