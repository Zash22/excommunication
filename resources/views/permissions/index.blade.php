@extends('layouts.app')

@section('content')
	<p>
		{!! link_to_route('permission.create', 'Create', [], ['class' => 'btn btn-primary']) !!}
	</p>
	<div class="panel panel-primary">
		<div class="panel-heading">Permissions</div>
		<div class="panel-body">
		@if(count($permissions))
			<table class="table table-striped">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($permissions as $permission)
						<tr>
							<td>{{ $permission->id  }}</td>
							<td>{{ $permission->name  }}</td>
							<td>{!! link_to_route('permission.edit', 'Edit', $permission->id, ['class'=>'btn btn-xs btn-warning']) !!}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif
		</div>
	</div>

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
