<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('artist_id');
			$table->unsignedInteger('album_id');			
			$table->string('songTitle',100);
			$table->string('slug',100);
			$table->text('lyrics')->nullable();
			$table->integer('rating');
            $table->timestamps();
        });
		
		Schema::table('songs',function($table){
			$table->foreign('artist_id')->references('id')->on('artist');
			$table->foreign('album_id')->references('id')->on('album');
			
			});
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('songs');
    }
}
