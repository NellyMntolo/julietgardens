<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\frontend\Typography;

class TypographyController extends Controller
{
    public function typography() {
        // Typography::get();
        return view ('frontend.typography');
    }
}
