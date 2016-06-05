<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album')->delete();
		$album=array(
		['id'=>1,'albumName'=>'Bat Country','slug'=>'bat-country','albumImageName'=>'batcountry.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime,'artist_id'=>1,'year'=>'2005'],
		['id'=>2,'albumName'=>'Avenged Sevenfold','slug'=>'avenged-sevenfold','albumImageName'=>'avengedsevenfold.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime,'artist_id'=>1,'year'=>'2009'],
		['id'=>3,'albumName'=>'Diamonds In The Rough','slug'=>'Diamonds-in-the-rough','albumImageName'=>'Diamonds-in-the-rough.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime,'artist_id'=>1,'year'=>'2006'],
		['id'=>4,'albumName'=>'Bat Country','slug'=>'bat-country','albumImageName'=>'batcountry.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime,'artist_id'=>1,'year'=>'1998'],
		);
		
		DB::table('album')->insert($album);
    }
}
