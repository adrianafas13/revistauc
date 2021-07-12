<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable=[
        /*spanish*/
        "route_image_carousel",
        "title_carousel",
        "info_carousel",
        /*english*/
        "en_route_image_carousel",
        "en_title_carousel",
        "en_info_carousel",
        /*italian */
        "it_route_image_carousel",
        "it_title_carousel",
        "it_info_carousel",
	];
}
