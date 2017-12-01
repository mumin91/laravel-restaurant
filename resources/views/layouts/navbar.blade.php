
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Demo Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/view_menus') }}">Menus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

            @if (Auth::guest())
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register</a>
    </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
    </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>
@endif
          </ul>
        </div>
      </div>
    </nav>