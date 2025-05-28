<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

// use TCG\Voyager\Facades\Voyager;
// use TCG\Voyager\Traits\Translatable;

class Products extends Model
{
    // use Translatable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shop_all_products';
	// protected $table = 'cpp_shop_additems';
    //protected $translatable = ['locale', 'page_title', 'page_keywords', 'page_description', 'header_title', 'header_description', 'header_banner', 'page_content'];

    // ['locale' => ''],
		   //      // ['page_title' => ''],
		   //      // ['page_keywords' => ''],
		   //      // ['page_description' => ''],
		   //      // ['header_title' => ''],
		   //      // ['header_description' => ''],
		   //      // ['header_banner' => ''],
		   //      // ['page_content' => '']

    // $about_us = App\Models::All()->where('locale', 'en')->first();

	//return $translatable->toArray();
}
