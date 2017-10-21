<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use stdClass;

class HomeController extends Controller
{
    public function index()
    {
        $photos = collect(config('cardoso.images'));
        return view('public.index', compact('photos'));
    }
}
