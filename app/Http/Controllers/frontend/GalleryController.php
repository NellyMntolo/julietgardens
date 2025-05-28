<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\frontend\Gallery;
use App\Models\frontend\Galleries;

class GalleryController extends Controller
{
    public function gallery() {
        $gallery = Gallery::all();
        $galleries = Galleries::all();
        return view('frontend.gallery',['gallery' => $gallery, 'galleries' => $galleries]);
    }
}
