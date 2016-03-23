@extends('layouts.app')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">Edit Permission</div>
		<div class="panel-body">
			{{--@include('errors.list')--}}
			{!! Form::model($permission, ['method' => 'PATCH', 'route' => ['permission.update', $permission->id],
			'class'=>'form-horizontal']) !!}

				@include('permissions._form', ['button'=>'Update'])

			{!! Form::close() !!}
		</div>
	</div>
@endsection
