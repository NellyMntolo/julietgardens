<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'general_settings';

   	protected $fillable = ["web_logo", "created_at", "updated_at"];
}
