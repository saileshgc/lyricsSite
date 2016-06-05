<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongModel extends Model
{
    //
	protected $table="songs"; //specifying table name...if empty takes artists
	
	protected $fillable=['artist_id','album_id','songTitle','slug','lyrics','rating']; //for massAssignment handling in update and insert
}
