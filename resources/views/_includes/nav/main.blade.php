<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-start">
      <a class="navbar-item is-paddingless" href="{{route('home')}}">
        <img src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer Logo"/>
      </a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
    </div>
    <div class="navbar-end" style="overflow: visible;">
      @if (Auth::guest())
        <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
        <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
      @else
        <button class="dropdown is-aligned-right navbar-item is-tab">
          Hey {{Auth::user()->name}} <span class="icon"><i class="fa fa-caret-down"></i></span>

          <ul class="dropdown-menu">
            <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile</a></li>
            <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Notifications</a></li>
            <li><a href="{{route('manage.dashboard')}}"><span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Manage</a></li>
            <li class="seperator"></li>
            <li><a href="{{route('logout')}}" onclick="event.preventDefault()
              document.getElementById('logout-form').submit();"><span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>Logout</a>
      @include('_includes.forms.logout')
            </li>
          </ul>
        </button>
      @endif
    </div>
  </div>
</nav>
