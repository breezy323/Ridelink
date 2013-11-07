<nav class='navbar navbar-default navbar-inverse navbar-fixed-top' rol='navigation'>
  <div class='navbar-header'>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class='navbar-brand' href='#'>RideLink</a>
  </div>
  <div class='collapse navbar-collapse' id='navbar-collapse'>
    <ul class='nav navbar-nav pull-right'>
      <li @if (Route::currentRouteName() == 'home') class='active' @endif><a href='{{ route("home") }}'>Home</a></li>
      <li><a href='#'>Order Now</a></li>
    </ul>
  </div>
</nav>