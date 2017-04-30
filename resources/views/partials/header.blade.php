
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('quotes.index') }}">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Motivational</a></li>
            <li><a href="#">Scientific</a></li>
            <li><a href="#">Literary</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">All Categories</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false">Time Period <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Before 1000 AD</a></li>
            <li><a href="#">Middle Ages</a></li>
            <li><a href="#">Classical Period</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Modern Era</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">All Time Periods</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search By Author">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Custom Search</a></li>
        <li><a href="#">API Keys</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('user.signup') }}">Sign Up</a></li>
            <li><a href="{{ route('user.signin') }}">Sign In</a></li>
            <li><a href="{{ route('user.profile') }}">My Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('user.logout') }}">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>