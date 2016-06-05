@extends('master')

@section('content')
<div class="row">
            <div class="col-lg-12"><a href="{{ url('/album/create') }}"><button type="button" class="btn btn-primary btn-lg round" style="float:right;clear:both;">Add Album</button></a>
                <h1 class="page-header">Albums</h1>
                
            </div>
 </div>
 
 <div class="col-lg-12">
                <h3 class="page-header">Albums</h3>
 </div>
 
 <div class="row">

       @foreach($albums as $album)     

            <div class="col-sm-3 col-xs-6">
                <a href="{{ route('album.show',$album->slug)}}">
                    <img class="img-responsive portfolio-item" src="{{ URL::asset('/images/album/'.$album->albumImageName)}}" alt="">
                </a>
            </div>

	@endforeach

        </div>
@endsection