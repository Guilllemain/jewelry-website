<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(ImagePartner::class);
    }
}
