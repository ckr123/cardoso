<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $files = collect();
        foreach (config('cardoso.city') as $photo) {
            $files->push($photo);
        }

        return view('public.city', compact('files'));
    }
}
