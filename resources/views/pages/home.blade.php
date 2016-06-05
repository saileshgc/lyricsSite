@extends('master')


@section('pageTitle')
	{{ $pageTitle }}
@stop


@section('content')
		
        <h2>{{ $artist }}</h2>
        
        <p>
        @foreach($titles as $title)
        	
        	{{ $title }}  <br/>
                  
	 	@endforeach
            
        </p>
@stop