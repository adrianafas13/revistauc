<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    public function article(){
		return $this->belongsTo('App\Article','articles_id');
	}
    protected $fillable=[
        /*spanish*/
        "title_edition",
        "number_edition",
        /*english*/
        "en_title_edition",
	];
}
