<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Image Save</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
 
<body>
  <form method="POST" action="" enctype="multipart/form-data">
    
    <label for="tilte">Title:</label>
    <input type="text" name="title">

    <label for="image">Image:</label>
    <input type="file" name="image">

    <label for="description">Description</label>
    <input type="text" name="description">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="submit" name="submit" class="btn btn-success">
  </form>
</body>
</html>