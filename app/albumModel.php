<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class albumModel extends Model
{
    //
	protected $table="album"; //specifying table name...if empty takes artists
	
	protected $fillable=['albumName','slug','albumImageName','artist_id','year']; //for massAssignment handling in update and insert
} 
