
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="{{url('/admin_dashboard')}}">Restaurant Administration</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				
				@if (Auth::guard('admin')->guest())
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/admin_login') }}">Login</a>
				</li>

				@else
				<li class="nav-item">
					<a class="nav-link" href="{{url('/admin_dashboard')}}">Home
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/all_menus') }}">View Menus</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/menus/create') }}">Add Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/orders') }}">View Orders</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/admin_register') }}">Register Admin</a>
				</li>
				<li class="nav-item">
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							{{ Auth::guard('admin')->user()->name }}
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="{{ url('/admin_logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Logout
						</a>
						<form id="logout-form" action="{{ url('/admin_logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</div>
				</div>
			</li>

			@endif
		</ul>
	</div>
</div>
</nav>

