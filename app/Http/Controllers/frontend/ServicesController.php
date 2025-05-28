<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\frontend\Services;

class ServicesController extends Controller
{
    public function services() {
        $services = Services::all();

        $services_testimonials = DB::table('services_testimonials')->get();
        $services_we_do = DB::table('services_we_do')->get();
        $services_featured = DB::table('services_featured')->get();

        // return view('frontend.services',['services' => $services]);
        return view('frontend.services', compact('services', 'services_testimonials', 'services_we_do', 'services_featured'));
    }
}
