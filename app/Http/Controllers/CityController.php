<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $photos = collect(config('cardoso.city'));

        return view('public.city', compact('photos'));
    }
}
