<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlanController extends Controller
{
    public function index()
    {
        $photos = Storage::files('public/plan/');
        $files = collect();
        foreach ($photos as $photo) {
            $filename = str_replace('public', '', $photo);
            $files->push($filename);
        }

        return view('public.plan', compact('files'));
    }
}
