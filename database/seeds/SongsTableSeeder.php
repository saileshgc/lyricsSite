<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->delete();
		
		$songs=array(
		['id'=>1,'artist_id'=>1,'album_id'=>1,'songTitle'=>'Beast And The Harlot','slug'=>'beast-and-the-harlot','lyrics'=>'This shining city built of gold, a far cry from innocence,<br/>There\'s more than meets the eye round here, look to the waters of the deep.<br\>A city of evil.
There sat a seven-headed beast, ten horns raised from his head.<br\>Symbolic woman sits on his throne, but hatred strips her and leaves her naked.<br\>The Beast and the Harlot.','rating'=>5,'created_at'=>new DateTime,'updated_at'=>new DateTime],
	['id'=>2,'artist_id'=>1,'album_id'=>1,'songTitle'=>'Burn It Down','slug'=>'burn-it-down','lyrics'=>'Jealousy\'s an ugly word, but you don\'t seem to care<br/>Converse behind my back, but now I\'m here<br\>Need no one to comply with me through everyone that I defeat<br\>Don\'t need you, fuck camaraderie, this rage will never go away<br/>Hatred fuels my blood, I\'ll burn ya down (you can\'t help me)<br\>One king to watch the horsemen fall, I\'ll fight \'til the end (I won\'t help you)<br\>I can\'t trust anyone, see it in my eyes<br\>Now I can understand, it\'s sorrow that feeds your lies','rating'=>4,'created_at'=>new DateTime,'updated_at'=>new DateTime],
		);
		DB::table('songs')->insert($songs);
    }
}
