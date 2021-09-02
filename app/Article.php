<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
		"title", 
		"author",
		"slug",
		"section", 
		"ruta_image",
		"text", 
		"ruta_file", 
		"en_title", 
		"ruta_en_image", 
		"en_text", 
		"ruta_en_file"
	];

	public function comment(){
		return $this->hasMany('App\Comment','articles_id')->where('approved',1)->orderBy('id','desc');
	}

	public function author(){
		return $this->belongsTo('App\Author','author_id');
	}

	public function edition(){
		return $this->belongsTo('App\Edition','edition_id');
	}
}
