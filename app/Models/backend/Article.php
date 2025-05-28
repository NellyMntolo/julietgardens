<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article';

    protected $fillable = ['article_page_title', 'article_page_keywords', 'article_page_description', 'article_header_title', 'article_header_description', 'article_header_banner', 'article_page_content'];

    // use fillable above for Article::create and Article::update models
    //	--- categories relation and images
}
