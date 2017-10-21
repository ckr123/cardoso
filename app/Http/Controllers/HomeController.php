<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use stdClass;

class HomeController extends Controller
{
    public function index()
    {
        $photos = collect(Storage::files('public/img/pictures'))
            ->map(function ($photo) {
                return str_replace('public', '', $photo);
            })
            ->sortBy(function ($photo) {
                return (int)str_replace(['/img/pictures/IMG_', '.JPG'], '', $photo);
            })
            ->take(10)
            ->shuffle()
            ->take(4);

        return view('public.index', compact('photos'));
    }
}
