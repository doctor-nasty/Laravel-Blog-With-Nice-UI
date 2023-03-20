<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class BlogPost extends Model
{
    use HasFactory;
    // const LIMIT = 150;


    protected $fillable = ['title', 'category_id', 'body', 'metabody', 'user_id', 'image'];

    public function user()
    {
    return $this->belongsTo('App\Models\User');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function getRouteKeyName()
    {
        return 'slug'; // db column name you would like to appear in the url.
    }
    
    // public function limit()
    // {
    //     return Str::limit($this->body, BlogPost::LIMIT );
    // }

}
