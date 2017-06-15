<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
	//

    protected $fillable = ['title', 'author_id', 'amount'];

    public function author()
    {
    	return $this->belongsto('app\author');
    }
}
