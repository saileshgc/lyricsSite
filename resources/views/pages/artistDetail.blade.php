@extends('master')

@section('content')
 <div class="row">
            <div class="col-lg-12"><a href="{{ url('/artist/'.$artist->slug.'/edit') }}"><button type="button" class="btn btn-primary btn-lg round" style="float:right;clear:both;">Edit Artist</button></a>
                <h1 class="page-header">{{ $artist->artistName }}            
                </h1>
            </div>
 </div>
 
 <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="{{ URL::asset('/images/'.$artist->image)}}" alt="">
            </div>

            <div class="col-md-4">
                <h3>Artist Description</h3>
                <p>{{ $artist->artistDescription }}.</p>
                <h3>Popular Songs</h3>
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
                <h3 class="page-header">Albums</h3>
            </div>

@foreach($albums as $album)
            <div class="col-sm-3 col-xs-6"> 
                <a href="#">
                    <img class="img-responsive portfolio-item" src="{{ URL::asset('/images/album/'.$album->albumImageName)}}" alt="">
                </a>
            </div> 
@endforeach 
        </div>
        
@stop