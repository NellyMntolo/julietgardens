<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class OurThinking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'our_thinking';

    protected $fillable = ["locale", "our_thinking_banner_title", "our_thinking_banner_desc", "our_thinking_banner_image", "our_thinking_editor"];
}
