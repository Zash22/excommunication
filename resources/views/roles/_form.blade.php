

<div class="form-group">
    {!! Form::label('name', 'Role Name', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::label ('Permissions', 'Permissions assigned to this Role' ) !!}
        {!! Form::select('Permissions[]', $permissions, $currentPermissions, ['class' => 'form-control selectize-multi', 'multiple', 'id'=> 'Permissions']) !!}
    </div>
</div>

<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
		<button type="submit" class="btn btn-primary">
			{{ $button }}
		</button>
	</div>
</div>

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#Permissions').selectize({
                plugins: ['remove_button']
            });
        });
    </script>
@endsection
