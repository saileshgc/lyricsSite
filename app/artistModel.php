<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artistModel extends Model
{
    //
	protected $table="artist"; //specifying table name...if empty takes artists
	
//for massAssignment handling in update and insert
	protected $fillable=[
	'artistName','artistDescription','slug','genre','image'
	];
}
