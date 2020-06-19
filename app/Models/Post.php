<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTranslations;
    
    public $translatable = ['title','content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function formateDate($date)
    {
        return $date->format('d m Y');
    }

    public function commentsall()
    {
        return $this->hasMany(Comment::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->where('active',1);
    }
}
