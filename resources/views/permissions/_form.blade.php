
<div class="form-group">
	{!! Form::label('name', 'Permission name', ['class'=>'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
		<button type="submit" class="btn btn-primary">
			{{ $button }}
		</button>
	</div>
</div>
