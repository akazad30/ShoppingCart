<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
 
<body>

  
   
      <h3>SignIN Page:</h3>
     
        @if(count($errors) > 0)
          <div class="alert alert-danger">
          @foreach($errors->all() as $error)

          <p>
             {{ $error }}
          </p>
          @endforeach
          </div>
        @endif
     
   <form class="form-horizontal" id="registration" method="post" action="">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="control-group">
          <label class="control-label">Email:</label>
          <div class="controls">
            <input type="text" id="email" name="email" class="form-control">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Password</label>
            <div class="controls">
            <input type="password" id="password" name="password" class="form-control">
          </div>
          <div class="controls">
            <button type="submit" class="btn btn-success" >SignIN</button>

          </div>
      

    </form>
</div>
</body>
</html>