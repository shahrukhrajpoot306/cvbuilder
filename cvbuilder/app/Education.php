<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['schoolname', 'degree', 'graduation_start_date', 'graduation_end_date'];
}
