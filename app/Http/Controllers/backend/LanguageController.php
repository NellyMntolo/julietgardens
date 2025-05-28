<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use DB;
use App\Models\backend\Language;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
    public function languages()
    {
    	// $languages = DB::table('lang')->select('locale', 'name', 'status', 'default_lang', 'active_lang')->where('active_lang', 'yes')->get();
    	// echo $languages->first()->name; // works for the first one
    	// print_r($languages->first()->name); // works for the first one

    	// echo $languages['name'];

        // return view('languages', $languages);
        // return view('languages', ['name' => 'Nelly']);
        // Works:
        return view('backend.languages', ['language' => DB::table('lang')->select('locale', 'name', 'status', 'default_lang', 'active_lang', 'lang_sort')->get()]);
    }

    public function active_languages()
    {
    	// $active_languages = DB::table('lang')->select('locale', 'name', 'status', 'default_lang', 'active_lang')->where('active_lang', 'yes')->get();

    	// echo $active_languages;

        // return view('languages');
        // return view('languages', ['name' => 'Nelly']);
        
        return view('backend.languages', ['active_language' => DB::table('lang')->select('locale', 'name', 'status', 'default_lang', 'active_lang')->where('active_lang', 'yes')->get()]);
    }
}
