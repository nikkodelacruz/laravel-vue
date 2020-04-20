<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   	// can be accessed within the class and by classes derived from that class
    // Table name
    protected $table = 'posts';

    // Primary key
    public $primaryKey = 'id';

    public $timestamps = true;

}
