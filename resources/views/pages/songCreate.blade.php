@extends('master')

@section('content')


	<h2>Add a New Song</h2>

	{{ $song_id= null}}

	{!! Form::open(array('action' => ['songsController@store'],'method' => 'POST')) !!}
    
 	   @include('pages._formSong')
    
    {!! Form::close() !!}

@stop

