<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;
    
    public $translatable = ['category'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
