@extends('master')

@section('pageTitle')
	<div><a href="{{ url('/artist/create') }}"><button type="button" class="btn btn-primary btn-lg round" style="float:right;">Add Artist</button></a></div>{{ $pageTitle }}
@stop

@section('content')

	@foreach($artistName as $artist)
	   	<a href="{{ route('artist_path',[$artist->slug]) }}">{{$artist->artistName}} </a> <br/> <!-- Equivalent to <a href="artist/{{ $artist->slug }}">{{$artist->artistName}} </a>  and needs named routes-->
    @endforeach
    {!! link_to_route('artist_home','Go Back Home')!!}
    
@stop