@extends('layouts.app')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">Edit User</div>
		<div class="panel-body">
{{--			@include('errors.list')--}}
			{!! Form::model($user, ['method' => 'PATCH', 'route' => ['user.update', $user->id],
			'class'=>'form-horizontal']) !!}

				@include('users.users_form', ['button'=>'Update'])

			{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="selectize.js"></script>
	<script>
	$(document).ready(function(){
			$('#Roles').selectize({
				plugins: ['remove_button']
			});
		});
	</script>
@endsection
