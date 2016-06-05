@extends('master')

@section('content')
	

	{!! Form::model($artist,['url'=>'artist/'.$artist->slug, 'method'=>'PATCH','files' => true]) !!}
   
    	@include('pages._form')
     
    {!! Form::close() !!}


	{!! Form::open(['method'=>'DELETE','url'=>['/artist/'.$artist->slug.'/destroy']]) !!}
     	<div class="form-group">
    		{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
    	</div>
	{!! Form::close() !!}
    

@stop