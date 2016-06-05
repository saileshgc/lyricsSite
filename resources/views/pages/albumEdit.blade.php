@extends('master')

@section('content')
	
	{{--*/  $artist_id = $album->artist_id /*--}}

	{!! Form::model($album,['route'=>['album.update',$album->slug], 'method'=>'PATCH','files' => true]) !!}
   
    	@include('pages._formalbum')
     
    {!! Form::close() !!}


	{!! Form::open(['method'=>'DELETE','route'=>['album.destroy',$album->slug]]) !!}
     	<div class="form-group">
    		{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
    	</div>
	{!! Form::close() !!}


@stop