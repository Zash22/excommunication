@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        Home

                        <br>
                        @can('admin')
                        ADMIN
                        @endcan
                        <br>

                        @can('camper')
                        CAMPER
                        @endcan
                        <br>

                        @can('teacher')
                        TEACHER
                        @endcan
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
