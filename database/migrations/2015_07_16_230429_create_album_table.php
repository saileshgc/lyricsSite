<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->increments('id');
			$table->string('albumName',50);
			$table->string('slug',50);
			$table->string('albumImageName',50);
            $table->timestamps();
			$table->unsignedInteger('artist_id');
			$table->integer('year');
			
			
        });
		
	Schema::table('album',function($table)
	{
		$table->foreign('artist_id')->references('id')->on('artist');
		
		});	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('album');
    }
}
