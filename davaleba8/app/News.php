<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
    	"title", 
    	"description", 
    	"shortdesc", 
    	"image", 
    	"upload_date",
    	"user_id",
    	"category_id"
    ];
}
