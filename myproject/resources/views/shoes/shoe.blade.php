<!DOCTYPE html"-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Male Shoes Adding</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
 
<body>
<div class="container">
  <form class="form-horizontal" id="registration" method='post' action='' enctype="multipart/form-data">
    <fieldset>
      <legend>Add Product(MaleShoe) page</legend>
      <div class="control-group">
        <label class="control-label">Product Title:</label>
        <div class="controls">
          <input type="text" id="username" name="title">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Product Image:</label>
        <div class="controls">
          <input type="file" id="image" name="image">
        </div>
      </div>


      <div class="control-group">
        <label class="control-label">Product Description:</label>
        <div class="controls">
          <textarea id="pdescription" name="description">
          </textarea>
        </div>


      <div class="control-group">
        <label class="control-label">Product Price:</label>
        <div class="controls">
          <input type="text" id="pprice" name="price">
        </div>
      </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
          <button type="submit" class="btn btn-success" >Add_Product(shoeMale)</button>
        </div>
      </div>
    </fieldset>

  </form>
</div>
</body>
</html>