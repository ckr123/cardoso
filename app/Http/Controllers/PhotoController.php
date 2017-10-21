<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
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
            ->values();
            
        return view('public.photos', compact('photos'));
    }
}
