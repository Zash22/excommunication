@extends('layouts.app')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">Create Permission</div>
		<div class="panel-body">

			{!! Form::open(['method' => 'POST', 'action' => 'PermissionController@store', 'class'=>'form-horizontal']) !!}

				@include('permissions._form', ['button'=>'Add'])

			{!! Form::close() !!}
		</div>
	</div>
@endsection
