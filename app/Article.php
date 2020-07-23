<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['author', 'logo', 'title', 'content', 'date', 'category_id'];
}
