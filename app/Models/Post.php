<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Base
{
    public $table = 'posts';

    public function category()
    {
        return $this->hasOne(PostCategory::class, 'id', 'category_id');
    }
}
