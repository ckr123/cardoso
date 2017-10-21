<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlanController extends Controller
{
    public function index()
    {
        $photos = collect(Storage::files('public/plan/'))
            ->map(function ($photo) {
                return str_replace('public', '', $photo);
            });

        return view('public.plan', compact('photos'));
    }
}
