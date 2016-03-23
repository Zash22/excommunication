
@extends('layouts.app')

@section('content')
	<p>
		{!! link_to_route('role.create', 'Create', [], ['class' => 'btn btn-primary']) !!}
	</p>
	<div class="panel panel-primary">
		<div class="panel-heading">Roles</div>
		<div class="panel-body">
		@if(count($roles))
			<table class="table table-striped">
				<thead>
				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">Name</th>
					<th class="text-center">Label</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
					@foreach($roles as $role)
					<tr>
						<td class="text-center">{!! $role->id !!}</td>
						<td class="text-center">{!! $role->name !!}</td>
                        <td>
                        {!! link_to_route('role.edit', 'Edit', $role->id, ['class'=>'btn btn-xs btn-warning']) !!}
                        </td>
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
