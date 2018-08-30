<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exposition extends Model
{
    protected $guarded = [];

    protected $dates = ['date_start', 'date_end'];
}
