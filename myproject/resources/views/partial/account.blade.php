<nav class="navbar navbar-default">
  <div class="container-fluid">


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-left">
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('user.signUp') }} ">SignUp</a></li>
            <li><a href="{{ route('user.signIn') }}">SignIn</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>