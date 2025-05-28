<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faq';

   	protected $fillable = ["locale", "faq_editor"];
}
