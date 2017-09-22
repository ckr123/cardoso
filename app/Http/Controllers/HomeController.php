<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use stdClass;

class HomeController extends Controller
{
    public function index()
    {
        $files = collect();
        foreach (config('cardoso.images') as $photo) {
            $files->push($photo);
        }

        return view('public.index', compact('files'));
    }
}
