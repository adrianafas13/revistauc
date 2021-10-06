<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    
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

    public function articles()
    {
        return $this->hasMany('\App\Article');
    }
}
