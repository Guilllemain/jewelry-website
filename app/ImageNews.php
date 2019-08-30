<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageNews extends Model
{
    protected $guarded = [];

    public function exposition()
    {
        return $this->belongsTo(Exposition::class);
    }
}
