<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\frontend\About;
use App\Models\frontend\Aboutus_team;

class AboutController extends Controller
{
    public function about() {
        $about = About::all();
        $about_team = Aboutus_team::all();
        return view('frontend.about',['about' => $about, 'about_team' => $about_team]);
    }
}
