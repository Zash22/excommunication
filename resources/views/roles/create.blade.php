@extends('layouts.app')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">Create Role</div>
		<div class="panel-body">

			{!! Form::open(['method' => 'POST', 'action' => 'RoleController@store',
			'class'=>'form-horizontal']) !!}

				@include('roles._form', ['button'=>'Add'])

			{!! Form::close() !!}
		</div>
	</div>
@endsection
