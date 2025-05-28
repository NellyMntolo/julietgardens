<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        // $testing_num = '';
        // $session_id = Session::get('session_id');
        $session_id = '1';
        $countCartItems = DB::table('users')->where(['id'=>$session_id])->count();
        // str_replace(search, replace, subject);
        // $testing_num = str_replace('{#dbusernumber#}', $countCartItems,  $testing_num);
        // print_r($countCartItems); // all views db

        return view('backend.dashboard');
        // View::share('backend.dashboard', $countCartItems);
        // View::share('backend.dashboard', $testing_num);
    }
}
