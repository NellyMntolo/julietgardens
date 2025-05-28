<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\frontend\Icons;

class IconsController extends Controller
{
    public function icons() {
        // Icons::get();
        return view ('frontend.icons');
    }
}
