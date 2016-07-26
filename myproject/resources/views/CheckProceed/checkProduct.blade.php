<!DOCTYPE html"-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add To Cart Page</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
 
	<title>Add_To_Cart Page</title>
</head>
<body>
		<div class="container">
		<h3>Product Checking Page</h3>
		<table border="1">
			<tr>
				<td><h4><i>Title</i></h></td>
				<td><h4><i>Amount</i></h></td>
				<td><h4><i>Price</i></h></td>
				<td><h4><i>TotalPrice</i></h></td>
		

			</tr>

			
				@foreach($data as $row)
					<tr>
						<td>{{ $row->title }}</td>
						<td>{{$row ->amount}}</td>
						<td>{{$row ->price}}</td>
						<td>{{ $row->totalprice }}</td>
					</tr>
				@endforeach

				<tr>
					<td></td>
					<td></td>
					<td><h4><i>TOTAL</i></h></td>
					<td><h4><i>{{ $total_price }}</i></h></td>
					<td></td>
				</tr>
		</table>

		<h1>Shipping</h1>
			<form action=" {{ route('route.registrationAndProceed') }} " method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="shipping">Address</label>
					<textarea name="address" class="form-control"></textarea>
				</div>
				<button class="btn btn-success">PlaceOrder/Proceed</button>
			
			</form>

</body>
</html>
