<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public $variable1 = "I am Data";

    public function __construct() {

       $variable2 = "I am Data 2";


       View::share ( 'variable1', $this->variable1 );
       View::share ( 'variable2', $variable2 );
       View::share ( 'variable3', 'I am Data 3' );
       View::share ( 'variable4', ['name'=>'Franky','address'=>'Mars'] );
       // global variable test (not working)
    }  

}
