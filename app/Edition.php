<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    public function article(){
		return $this->belongsTo('App\Article','articles_id');
	}
    protected $fillable=[
        /*general*/
        "edition_number",
        "edition_date",
        /*spanish*/
        "edition_title",
        "edition_description",
        "edition_route_image",
        /*english*/
        "edition_title_en",
        "edition_description_en",
        "edition_route_image_en",
    ];

    public $timestamps = false;
}
