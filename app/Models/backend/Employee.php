<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rema_employees';

    // protected $translatable = ['first_name', 'last_name', 'email', 'phone_number', 'hire_date', 'job_title', 'salary', 'department'];
}
