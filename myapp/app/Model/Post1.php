<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post1 extends Model
{
    protected $table = 'posts';
    public $timestamps = false;
    protected $fillable = ['title', 'body'];
}
