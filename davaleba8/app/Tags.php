<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
    	"news_id", "name_tag"
    ];
}
