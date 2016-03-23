@extends('layouts.app')

@section('content')
	<p>
		{!! link_to_route('user.create', 'Create', [], ['class' => 'btn btn-primary']) !!}
	</p>
	@if(count($users))
		<div class="panel panel-primary">
			<div class="panel-heading">Users</div>

			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Client</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email}}</td>
							<td>
								{!! link_to_route('user.edit', 'Edit', ['id' => $user->id], ['class' => 'btn-sm btn-info']) !!}
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@else
		<div class="panel-heading alert-info">No Associations</div>
	@endif
@endsection

@section('scripts')

	<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">

		$(document).ready(function () {

			$('table').DataTable();

		});

	</script>
@endsection
