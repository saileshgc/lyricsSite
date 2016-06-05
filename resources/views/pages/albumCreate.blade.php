@extends('master')

@section('content')
	<h2>Add a New Album</h2>

	{{ $artist_id= null}}

	{!! Form::open(array('action' => ['AlbumController@store'],'method' => 'POST','files' => true)) !!}
    
 	   @include('pages._formAlbum')
    
    {!! Form::close() !!}

@stop

