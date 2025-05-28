<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'privacy';

   	protected $fillable = ["locale", "privacy_editor"];
}
