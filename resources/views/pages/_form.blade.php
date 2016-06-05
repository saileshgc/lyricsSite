<div class="form-group {{$errors->has('artistName')? 'has-error':''}}">
	    {!! Form::label('Artist Name') !!}
    	{!! Form::text('artistName',null,['class'=>'form-control']) !!}
        {!! $errors->first('artistName','<span class="help-block">:message</span>')  !!}
    </div>
    <div class="form-group {{$errors->has('artistDescription')? 'has-error':''}}">
	    {!! Form::label('Artist Description') !!}
    	{!! Form::textarea('artistDescription',null,['class'=>'form-control']) !!}
        {!! $errors->first('artistDescription','<span class="help-block">:message</span>')  !!}
    </div>
    <div class="form-group {{$errors->has('slug')? 'has-error':''}}">
	    {!! Form::label('Slug') !!}
    	{!! Form::text('slug',null,['class'=>'form-control']) !!}
        {!! $errors->first('slug','<span class="help-block">:message</span>')  !!}
    </div>
    
     <div class="form-group {{$errors->has('genre')? 'has-error':''}}">
	    {!! Form::label('Genre') !!}
    	{!! Form::text('genre',null,['class'=>'form-control']) !!}
        {!! $errors->first('genre','<span class="help-block">:message</span>')  !!}
    </div>
    
    <div class="form-group {{$errors->has('imageFile')? 'has-error':''}}">
    	{!! Form::label('Upload Image') !!}
    	{!! Form::file('imageFile', null) !!}
        {!! $errors->first('imageFile','<span class="help-block">:message</span>')  !!}
	</div>
    
    <div class="form-group">
    	{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
    </div>
    