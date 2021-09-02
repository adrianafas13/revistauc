<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function article(){
		return $this->belongsTo('App\Article','articles_id');
	}
    
    protected $fillable=[
        /*spanish*/
        "name_author",
        "lastname_author",
        "email_author",
        "grades_author",
        "resume_author",
        "route_image_author",
        /*english*/
        "en_grades_author",
        "en_resume_author",
        /*italiano*/
        "it_grades_author",
        "it_resume_author",
	];
} 