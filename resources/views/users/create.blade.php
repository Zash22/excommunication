@extends('layouts.app')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">Create User</div>
		<div class="panel-body">

			{!! Form::open(['method' => 'POST', 'action' => 'UserController@store', 'class'=>'form-horizontal']) !!}

				@include('users.users_form', ['button'=>'Add'])

			{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('scripts')
	<script>
		$(document).ready(function(){
			$('#Roles').selectize({
				plugins: ['remove_button']
			});
		});
	</script>
@endsection
