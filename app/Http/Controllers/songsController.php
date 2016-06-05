<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\SongModel;
use Input;
use Response;
use App\Http\Requests\CreateSongRequest;

class songsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
	public function __construct(SongModel $song)
	 {
		 $this->song=$song;
	 }
	 
    public function index()
    {
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$artist=DB::table('artist')->lists('artistName', 'id');
        return view('pages.songCreate',compact('artist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateSongRequest $request)
    {
        //
		$song = new SongModel(array(
		 		'artist_id' => $request->get('artist'),
				'album_id' => $request->get('album'), 
				'songTitle' => $request->get('songTitle'),
				'slug' => $request->get('slug'),
				'lyrics'=> $request->get('lyrics'),
				'rating'=> $request->get('rating'),
				
   			 ));
			$song->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('pages.songDetail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
	
	public function dropdown()
	{
		$input = Input::get('option');
		$albumList = DB::table('album')->where('artist_id', $input)->orderBy('albumName', 'asc')->lists('albumName','id');
		return Response::json($albumList);
	}
	
}
