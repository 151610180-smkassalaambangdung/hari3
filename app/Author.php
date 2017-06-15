<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillabel =['name'];

    public function books()
    {
    	return $this->hasMany('App\Books');
    }
}
