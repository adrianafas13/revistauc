<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
		"title", 
		"slug", 
		"ruta_image",
		"text", 
		"ruta_file", 
		"en_title", 
		"en_text", 
		"edition_id",
		"author_id",
		"area_id",
	];
	//relacion con los comentarios
	public $timestamps = false;
	public function comment(){
		return $this->hasMany('App\Comment','articles_id')->where('approved',1)->orderBy('id','desc');
	}
	//relacion con las ediciones
	public function edition(){
        return $this->belongsTo('App\Edition', 'edition_id');
	}
	//relacion con los autores
	public function author(){
        return $this->belongsTo('App\Author', 'author_id');
    }
	//relacion con las areas de investigacion
	public function area(){
        return $this->belongsTo('App\Area', 'area_id');
    }
}
