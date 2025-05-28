<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function __construct()
    // {
    //    $this->middleware('auth'); 
    // }

    // dd($user->can('permission-slug')); // testing, not sure where to place


    public function store(Request $request)
    {
        if ($request->user()->can('create-tasks')) {
            //Code goes here
        }
    }

    public function destroy(Request $request, $id)
    {   
        if ($request->user()->can('delete-tasks')) {
          //Code goes here
        }

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $default_lang = DB::table('lang')->where('active_lang','=', 'yes')->where('default_lang', '!=', '')->orderByDesc('default_lang')->get();
        print_r($default_lang);
        setcookie("langCookie", $default_lang, time()+3600);  /* expire in 1 hour */
        // cookies
        // user roles
        // other stuff applying to all pages (sessions ...)
        // return view('backend.orders.all_orders', compact('local_towns','all_orders') );
    }

}
