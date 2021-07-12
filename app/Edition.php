<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $fillable=[
        /*spanish*/
        "route_image_edition",
        "title_edition",
        "number_edition",
        /*english*/
        "en_route_image_edition",
        "en_title_edition",
        "en_number_edition",
        /*italian*/
        "it_route_image_edition",
        "it_title_edition",
        "it_number_edition",

	];
}
