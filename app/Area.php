<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable=[
		"area_es", 
		"area_en",
		'color', 		    
	];
}
