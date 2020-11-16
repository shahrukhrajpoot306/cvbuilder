<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = ['job_title', 'company', 'city', 'start_date', 'end_date'];
}
