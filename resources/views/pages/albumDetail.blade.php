@extends('master')

@section('content')
 <div class="row">
            <div class="col-lg-12"><a href="{{ url('/album/'.$album->slug.'/edit') }}"><button type="button" class="btn btn-primary btn-lg round" style="float:right;clear:both;">Edit Album</button></a>
            <a href="{{ url('/songs/create') }}"><button type="button" class="btn btn-primary btn-lg round" style="float:right;clear:both;">Add Song</button></a>
                <h1 class="page-header">{{ $album->albumName }} ( {{ $album->year }} )             
                </h1>
            </div>
 </div>
 
 <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="{{ URL::asset('/images/album/'.$album->albumImageName)}}" alt="">
            </div>

            <div class="col-md-4">
                <h3>Songs in this Album</h3>
                <ul>
                    <li>Song 0</li>
                    <li>Song 1</li>
                    <li>Song 2</li>
                    <li>Song 3</li>
                </ul>
            </div>

        </div>      
 
 <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">More Albums</h3>
            </div>

        </div>
        
@stop