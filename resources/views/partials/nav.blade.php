<nav class="navbar navbar-default">
	<div class="container-fluid">

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/users">Users</a></li>
			</ul>

			<ul class="nav navbar-nav">
				<li><a href="/notices">Notices</a></li>
			</ul>

			<ul class="nav navbar-nav">
				<li><a href="/events">Events</a></li>
			</ul>
{{--			@if (Auth::user()->client_rec_id == 1)--}}
			{{--<ul class="nav navbar-nav">--}}
				{{--<li><a href="/report">Reports</a></li>--}}
			{{--</ul>--}}
			{{--@endif--}}

{{--			@if (Auth::user()->client_rec_id == 1)--}}
			{{--<ul class="nav navbar-nav">--}}
				{{--<li><a href="/client">Clients</a></li>--}}
			{{--</ul>--}}
			{{--@endif--}}

			{{--@can('user')--}}
			{{--<ul class="nav navbar-nav">--}}
				{{--<li><a href="/user">Users</a></li>--}}
			{{--</ul>--}}
			{{--@endcan--}}


{{--			@if (Auth::user()->client_rec_id == 1)--}}
			{{--<ul class="nav navbar-nav">--}}
				{{--<li><a href="/permission">Permissions</a></li>--}}
			{{--</ul>--}}
			{{--@endif--}}
			{{--@can('mds-access')--}}
			{{--<ul class="nav navbar-nav">--}}
				{{--<li><a href="/role">Roles</a></li>--}}
			{{--</ul>--}}
			{{--@endcan--}}


		</div>
	</div>
</nav>

@yield('content')

		<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
