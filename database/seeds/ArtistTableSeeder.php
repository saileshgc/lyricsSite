<?php

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artist')->delete();
		$artist=array(
		['id'=>'1','artistName'=>'A Day To Remember','artistDescription'=>'Avenged Sevenfold (sometimes abbreviated as A7X) is an American heavy metal band from Huntington Beach, California, formed in 1999. The band\'s members are lead vocalist M. Shadows, rhythm guitarist and backing vocalist Zacky Vengeance, lead guitarist and backing vocalist Synyster Gates, bass guitarist Johnny Christ and drummer Arin Ilejay.','slug'=>'a-day-to-remember','genre'=>'Metal','image'=>'adtr.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime],
		['id'=>'2','artistName'=>'Blink 182','artistDescription'=>'Blink-182 (stylized as blink-182) is an American rock band formed in Poway, a suburb of San Diego, California in 1992. The band currently consists of bassist and vocalist Mark Hoppus and drummer Travis Barker and touring guitarist and vocalist Matt Skiba.

Blink-182 is considered a key group in the development of pop punk; their combination of pop melodies with fast-paced punk rock featured a more radio-friendly accessibility than prior bands. Founded by Hoppus, DeLonge and drummer Scott Raynor, the band emerged from the Southern California punk scene of the early 1990s and first gained notoriety for high-energy live shows and irreverent lyrical toilet humor.','slug'=>'blink-182','genre'=>'Pop Punk','image'=>'blink182.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime],
		['id'=>'3','artistName'=>'Muse','slug'=>'muse','artistDescription'=>'Muse are an English rock band from Teignmouth, Devon, formed in 1994. The band consists of Matthew Bellamy (lead vocals, guitar, piano, keyboards), Christopher Wolstenholme (bass guitar, backing vocals) and Dominic Howard (drums, percussion, synthesisers). They are known for their energetic live performances.','genre'=>'Rock','image'=>'muse.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime],
		['id'=>'4','artistName'=>'Red Hot Chili Peppers','artistDescription'=>'Red Hot Chili Peppers (also sometimes shortened to "The Chili Peppers" or abbreviated as "RHCP") are an American rock band formed in Los Angeles in 1983. The group\'s musical style primarily consists of rock with an emphasis on funk, as well as elements from other genres such as punk rock and psychedelic rock. When played live, their music incorporates elements of jam band due to the improvised nature of much of their performances. Currently, the band consists of founding members Anthony Kiedis (vocals) and Flea (bass), longtime drummer Chad Smith, and guitarist Josh Klinghoffer, who joined in late 2009, replacing John Frusciante. Red Hot Chili Peppers have won seven Grammy Awards, and have become one of the best-selling bands of all time, selling over 80 million records worldwide.[1] In 2012, they were inducted into the Rock and Roll Hall of Fame.','slug'=>'red-hot-chili-peppers','genre'=>'Funk Rock','image'=>'rhcp.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime],

		);
		
		DB::table('artist')->insert($artist);
    }
}
