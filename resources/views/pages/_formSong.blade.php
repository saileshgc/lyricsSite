	 <div class="form-group  {{$errors->has('artist')? 'has-error':''}}">
    {!! Form::label('Select Artist') !!}
    {!! Form::select('artist', (['0' => 'Select a Category'] + $artist), $song_id ,['id'=>'artist','class' => 'form-control']) !!}
    {!! $errors->first('artist','<span class="help-block">:message</span>')  !!}
    </div>
    <div class="form-group  {{$errors->has('album')? 'has-error':''}}">
    {!! Form::label('Select Album') !!}
    {!! Form::select('album', (['0' => 'Select a Category'] ), $song_id ,['id'=>'album','class' => 'form-control']) !!}
    {!! $errors->first('album','<span class="help-block">:message</span>')  !!}
    </div>
    <div class="form-group {{$errors->has('songTitle')? 'has-error':''}}">
	    {!! Form::label('Song Title') !!}
    	{!! Form::text('songTitle',null,['class'=>'form-control']) !!}
        {!! $errors->first('songTitle','<span class="help-block">:message</span>')  !!}
    </div>
    <div class="form-group {{$errors->has('slug')? 'has-error':''}}">
	    {!! Form::label('Slug') !!}
    	{!! Form::text('slug',null,['class'=>'form-control']) !!}
        {!! $errors->first('slug','<span class="help-block">:message</span>')  !!}
    </div>
     <div class="form-group {{$errors->has('lyrics')? 'has-error':''}}">
	    {!! Form::label('Lyrics') !!}
    	{!! Form::textarea('lyrics',null,['class'=>'form-control']) !!}
        {!! $errors->first('year','<span class="help-block">:message</span>')  !!}
    </div>
   <div class="form-group {{$errors->has('rating')? 'has-error':''}}">
	    {!! Form::label('Rating') !!}
    	{!! Form::text('rating',null,['class'=>'form-control']) !!}
        {!! $errors->first('rating','<span class="help-block">:message</span>')  !!}
    </div>
    <div class="form-group">
    	{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
    </div>

     <script type="text/javascript">
	$(document).ready(function(){
        $('#artist').change(function(){
            $.get("{{url('/songs/albumsdropdown')}}", { option: $(this).val()}, 
            function(data) {
	                var numbers = $('#album');
                    numbers.empty();
					if (data!=""){
	                    $.each(eval(data), function(key, value) {
							   numbers.append($("<option></option>").attr("value",key).text(value)); 
        	      		});
					}else
					{
						 numbers.append($("<option>No Albums Found!</option>")); 
					}
            });

        });

    });
	</script>