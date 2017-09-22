<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Storage::files('public/img/');
        $files = collect();
        foreach ($photos as $photo) {
            $filename = str_replace('public', '', $photo);
            $sortOrder = preg_match_all("/[0-9]/", $filename);
            if ($sortOrder >= 3) {
                $files->push($filename);
            } else {
                $files->prepend($filename);
            }
        }

        return view('public.photos', compact('files'));
    }
}
