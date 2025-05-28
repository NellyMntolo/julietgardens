<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

// use TCG\Voyager\Facades\Voyager;
// use TCG\Voyager\Traits\Translatable;

class NewsLetter extends Model
{
    // use Translatable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'newsletter';

    //protected $translatable = ['id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update'];

    protected $fillable = ['id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update'];

    // ['locale' => ''],
		   //      // ['page_title' => ''],
		   //      // ['page_keywords' => ''],
		   //      // ['page_description' => ''],
		   //      // ['header_title' => ''],
		   //      // ['header_description' => ''],
		   //      // ['header_banner' => ''],
		   //      // ['page_content' => '']

    // $about_us = App\Models::All()->where('locale', 'en')->first();

	// return $translatable->toArray();
}
