<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
