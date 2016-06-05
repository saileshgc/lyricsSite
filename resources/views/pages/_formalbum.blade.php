<div class="form-group {{$errors->has('albumName')? 'has-error':''}}">
	    {!! Form::label('Album Name') !!}
    	{!! Form::text('albumName',null,['class'=>'form-control']) !!}
        {!! $errors->first('albumName','<span class="help-block">:message</span>')  !!}
    </div>
    <div class="form-group  {{$errors->has('artist')? 'has-error':''}}">
    {!! Form::label('Select Artist') !!}
    {!! Form::select('artist', (['0' => 'Select a Category'] + $artist), $artist_id ,['class' => 'form-control']) !!}
    {!! $errors->first('artist','<span class="help-block">:message</span>')  !!}
    </div>
    <div class="form-group {{$errors->has('slug')? 'has-error':''}}">
	    {!! Form::label('Slug') !!}
    	{!! Form::text('slug',null,['class'=>'form-control']) !!}
        {!! $errors->first('slug','<span class="help-block">:message</span>')  !!}
    </div>
     <div class="form-group {{$errors->has('year')? 'has-error':''}}">
	    {!! Form::label('Year') !!}
    	{!! Form::text('year',null,['class'=>'form-control']) !!}
        {!! $errors->first('year','<span class="help-block">:message</span>')  !!}
    </div>
    <div class="form-group {{$errors->has('imageFile')? 'has-error':''}}">
    	{!! Form::label('Upload Image') !!}
    	{!! Form::file('imageFile', null) !!}
        {!! $errors->first('imageFile','<span class="help-block">:message</span>')  !!}
	</div>
    <div class="form-group">
    	{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
    </div>
    
   