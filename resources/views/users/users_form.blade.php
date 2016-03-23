<div class="form-group">
	{!! Form::label('name', 'Name', ['class'=>'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('email', 'Email', ['class'=>'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('email', null, ['class'=>'form-control']) !!}
	</div>
</div>


<div class="group">
	{!! Form::label ('Roles', 'Roles and Permissions', ['class'=>'col-md-4 control-label'] ) !!}
	<div class="col-md-6">
		{!! Form::select('Roles[]', $roles, $currentRoles, ['class' => 'form-control selectize-multi', 'multiple', 'id'=> 'Roles']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 text-right">
		<button type="submit" class="btn btn-primary">
			{{ $button }}
		</button>
	</div>
</div>
