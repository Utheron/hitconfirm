<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
