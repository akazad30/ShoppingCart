<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>   
             <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Profile</a></li>

                      <li>
                          <a href="#" data-toggle="dropdown" class="dropdown-toggle">AddProduct <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="{{ route('device.getDevice') }}">ElectronicsDevice</a></li>
                              <li><a href="{{ route('mobile.mobileDevice') }}">Mobile</a></li>

                              <li> 

                                   <a href="allClothe.blade.php" data-toggle="dropdown-menu" class="dropdown-toggle">Clothe <b class="caret"></b></a>
                                
                                    <ul class="dropdown-submenu">
                                  
                                            <li><a href="{{ route('clothe.Tshirt') }} ">T_Shirt</a></li>
                                            <li><a href="{{ route('clothe.jeans') }}">Jeans</a></li>
                                  
                                    </ul>
                              </li>

                              <li> 

                                   <a href="allShoe.blade.php" data-toggle="dropdown-menu" class="dropdown-toggle">Shoe <b class="caret"></b></a>
                                
                                    <ul class="dropdown-submenu">
                                  
                                            <li><a href="{{ route('maleShoe.shoe') }}">Male_Shoe</a></li>
                                            <li><a href="{{ route('femaleShoe.shoe') }}">Female_Shoe</a></li>
                                  
                                    </ul>
                              </li>

                          </ul>
                      </li>
              </ul>
        </div><!-- /.navbar-collapse -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ShoppingCart</a></li>
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