<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route('home') }}" id="logo"><span class="red">C</span>ARDSET</a>
    </div>
    
    @if(Auth::check())
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ URL::route('users.show', Auth::user()->id) }}"><i class="fa fa-th-large"></i> Dashboard</a></li>
              <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
              <li class="divider"></li>
              <li><a href="{{ URL::route('logout') }}"><i class="fa fa-sign-out"></i> Sign out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    @endif
  </div><!-- /.container-fluid -->
</nav>