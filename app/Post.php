<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = "posts";
    //Primary key
    public $primaryKey = "id";
    //Timestamps default = true
    public $timestamps = true;
}
