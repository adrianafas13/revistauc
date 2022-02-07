<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable=[
        /*spanish*/
        "notice_es",
        /*english*/
        "notice_en",
	];
}
