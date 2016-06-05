<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateArtistRequest;
use App\Http\Controllers\Controller;
use DB;
use App\artistModel;


class PagesController extends Controller
{
	public function __construct(artistModel $artist)
	{
		$this->artist=$artist;	
	}
	
    public function index()
	{
		$pageTitle='Home Page';
		$lyricsTitle=['Drones','Save Me','Panic Station'];
		$artistName = 'Muse';
		return view('pages.home',['pageTitle'=>$pageTitle,'artist'=>$artistName,'titles' =>$lyricsTitle]); //make a variable title and assign lyricsTitle to it
	}
	
	public function about()
	{
		$pageTitle='About Us';
		$aboutPage='This is just a test';
		$name = 'Sailesh';
		return view('pages.about',compact('pageTitle','aboutPage','name'));
	}
	
	public function artist(artistModel $artist)
	{
		$pageTitle='Artists';
		$artistName=$artist->orderBy('artistName', 'asc')->get();
		//dd($artistName);
		return view('pages.artist',compact('pageTitle','artistName'));
	}
	
	public function showArtist($slug)
	{
		$artist= DB::table('artist')->where('slug',$slug)->first();
		$id=$artist->id;
		$albums= DB::table('album')->where('artist_id',$id)->get();
		return view('pages.artistDetail',compact('artist','albums'));
	}
	
	public function getArtist()
	{
		return ['A Day To Remember','Red Hot Chili Peppers','Incubus','Ed Sheeran'];
	}
	
	public function test(artistModel $artist) //Using Route::model('id','App\artistModel');
	{ 
		return view('pages.about',compact('artist'));
	}
	
	public function create()
	{
		return view('pages.create');
	}
	
	public function store(CreateArtistRequest $request) //can replace Request with CreateArtistRequest because extands Request CLass 
	{
		//dd($request->all());
		//$this->artist->create($request->all()); //stores all
			$imageName = $request->artistName. '.'.$request->file('imageFile')->getClientOriginalExtension();
		 	$artist = new artistModel(array(
		 		'artistName' => $request->get('artistName'),
				'artistDescription' => $request->get('artistDescription'),
				'slug' => $request->get('slug'), //look into the artist table and see if slug is unique or not
				'genre' => $request->get('genre'),
				'image' => $imageName
   			 ));
			$artist->save();
	    	$request->file('imageFile')->move(base_path().'/public/images/',$imageName);
			return redirect('/')->with('message', 'Artist added!');
	}
	
	public function edit($slug) //using __construct
	{
		$artist=$this->artist->whereSlug($slug)->first();
		return view('pages.edit',compact('artist')); 
	}
	
	public function genre() //using __construct
	{
		$genre= $this->artist->select('genre')->get();
		dd($genre);
	}
	
	public function update($slug, Request $request)
	{
//		dd(\Request::all());
		$imageName = $request->artistName. '.'.$request->file('imageFile')->getClientOriginalExtension();
		$artistUpdate=$this->artist->whereSlug($slug)->first();
		//$artistUpdate->artistName = $request->get('artistName');
		$artistUpdate->fill(['artistName'=>$request->get('artistName'),'artistDescription'=>$request->get('artistDescription'),'slug'=>$request->get('slug'),'genre'=>$request->get('genre'),'image'=>$imageName]);
		$artistUpdate->save();
		 $request->file('imageFile')->move(base_path().'/public/images/',$imageName);
		return redirect('artist');
		
	}
	
	public function destroy(artistModel $artist,$slug)
	{	//dd($slug);
		$artist->whereSlug($slug)->delete(); //whereSlug($slug) equivalent to $slug
		return redirect('artist');
	}
}
