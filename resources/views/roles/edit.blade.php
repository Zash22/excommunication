@extends('layouts.app')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">Edit Role</div>
		<div class="panel-body">
			{{--@include('errors.list')--}}
			{!! Form::model($role, ['method' => 'PATCH', 'route' => ['role.update', $role->id],	'class'=>'form-horizontal']) !!}

				@include('roles._form', ['button'=>'Update'])

			{!! Form::close() !!}
		</div>
	</div>
@endsection
