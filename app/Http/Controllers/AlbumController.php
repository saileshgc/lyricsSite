<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\albumModel;
use App\Http\Requests\CreateAlbumRequest;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
	public function __construct(albumModel $album)
	{
		$this->album=$album;	
	} 
	 
    public function index()
    {
		$albums=$this->album->orderBy('albumName', 'asc')->get();
	    return view('pages.album',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$artist=DB::table('artist')->lists('artistName', 'id');
//		dd($artistName);
        return view('pages.albumCreate',compact('artist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateAlbumRequest $request)
    {
		//dd($request->all());
		$imageName = $request->albumName. '.'.$request->file('imageFile')->getClientOriginalExtension();
		$album = new albumModel(array(
		 		'albumName' => $request->get('albumName'),
				'slug' => $request->get('slug'), //look into the artist table and see if slug is unique or not
				'albumImageName' => $imageName,
				'artist_id' => $request->get('artist'),
				'year'=> $request->get('year')
   			 ));
			$album->save();
	    	$request->file('imageFile')->move(base_path().'/public/images/album/',$imageName);
			return redirect('/album')->with('message', 'Album added!');
		
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
		$album=$this->album->whereSlug($slug)->first();
        return view('pages.albumDetail',compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug)
    {
		$album=$this->album->whereSlug($slug)->first();
        $artist=DB::table('artist')->lists('artistName', 'id');
        return view('pages.albumEdit',compact('album','artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CreateAlbumRequest $request, $slug)
    {
		//dd($id);
        $imageName = $request->albumName. '.'.$request->file('imageFile')->getClientOriginalExtension();
		$albumUpdate=$this->album->whereSlug($slug)->first();
		//dd($albumUpdate);
		$albumUpdate->fill(['albumName'=>$request->get('albumName'),'slug'=>$request->get('slug'),'albumImageName'=> $imageName,'artist_id'=>$request->get('artist'),'year'=>$request->get('year')]);
		$albumUpdate->save();
		 $request->file('imageFile')->move(base_path().'/public/images/album/',$imageName);
		return redirect('album')->with('message', 'Album Updated!');
	
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($slug)
    {
        $this->album->whereSlug($slug)->delete();
		return redirect('album')->with('message', 'Album Deleted!');
    }
}
