<nav class='navbar navbar-default' role='navigation'>
  <div class='navbar-header'>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#admin-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class='navbar-brand' href="{{ route('admin') }}">RideLink :: Admin</a>
  </div>

  <div class='collapse navbar-collapse' id='admin-navbar-collapse'>
    <ul class='nav navbar-nav'>
      <li @if (Route::currentRouteName() == 'admin.users.index') class='active' @endif><a href="{{ route('admin.users.index') }}">Users</a></li>
      <li @if (Route::currentRouteName() == 'admin.orders.index') class='active' @endif><a href="{{ route('admin.orders.index') }}">Orders</a></li>
    </ul>
    <ul class='nav navbar-nav navbar-right'>
      <li><a href="{{ route('admin.logout') }}">Logout</a></li>
    </ul>
    <p class='navbar-text pull-right'>Signed in as {{$user->first_name}}</p>
  </div>
</nav>
