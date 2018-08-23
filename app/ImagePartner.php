<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagePartner extends Model
{
    protected $guarded = [];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
