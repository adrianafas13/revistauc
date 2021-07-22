<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable=[
        /*spanish*/
        "information_title",
        "information_text",
        /*english*/
        "en_information_title",
        "en_information_text",
        /*italiano*/
        "it_information_title",
        "it_information_text",
	];
}