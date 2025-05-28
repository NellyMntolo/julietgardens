<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ImageOptimizer;
use Illuminate\Support\Facades\DB;


class ImageController extends Controller
{
    public function imagecompressor()
    {

    	return view('backend.imagecompressor');
  //   	$pathToImage = 'uploads';
  //   	// the image will be replaced with an optimized version which should be smaller
		// ImageOptimizer::optimize($pathToImage);

		// if you use a second parameter the package will not modify the original
		// ImageOptimizer::optimize($pathToImage, $pathToOptimizedImage);
    	// return view('imagecompressor');
        
    }
}
