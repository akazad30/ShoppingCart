<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>

    <h3 style="text-align:center; background-color:gray">Welcome To PayMent Page</h3>
      <table class="table table-sm" border="2" style="background-color:pink">
          <tr>
            <td>Email_ID:</td>
            <td>abulkalam129@gmail.com</td>
          </tr>
           <tr>
            <td>Total_Product</td>
            <td>
                {{$total_product }}
            </td>
          </tr>
          <tr>
            <td>Total_Price</td>
            <td>
                {{$total_price }}
            </td>
          </tr>
          <tr>
            <td>Pay</td>
            <td>

              <form action="{{ route('shopping') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" value="" name="payment">TK
                <button class="btn btn-success">Shopping</button>    
              </form>
            </td>
          </tr>
          <tr></tr>
      </table>
</body>
</html>