<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\frontend\Index;
use App\Models\frontend\Index_sliders;
use App\Models\frontend\Index_news;

// Import the class namespaces first, before using it directly
// use Srmklive\PayPal\Services\PayPal as PayPalClient;

class IndexController extends Controller
{
    public function index() {
        // Index::get();

        // $provider = new PayPalClient;

        // Through facade. No need to import namespaces
        // $provider = \PayPal::setProvider();
        
        // return view ('frontend.index');

        $index = Index::all();
        $index_sliders = Index_sliders::all()->sortByDesc('id');
        $index_news = Index_news::all()->sortByDesc('id')->take(3);
        return view('frontend.index',['index' => $index, 'index_sliders'=> $index_sliders, 'index_news'=> $index_news]);
    }
}
