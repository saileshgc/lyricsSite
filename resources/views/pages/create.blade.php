@extends('master')

@section('content')
	<h2>Add a New Artist</h2>

	{!! Form::open(['url'=>'artist/create','files' => true]) !!}
    
    @include('pages._form')
    
    {!! Form::close() !!}

@stop