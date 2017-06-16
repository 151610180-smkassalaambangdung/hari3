<div class="form-grouf{{$errors->has('name')? 'has-error': ''}}">
	{!! Form::label('name', Name', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('name', null,['class'=>'form-control']) !!}
		{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>