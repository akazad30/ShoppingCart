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
		<h3>AddToCartPage</h3>
		<table border="1">
			<tr>
				<td>Title</td>
				<td>Image</td>
				<td>Amount</td>
				<td>Price</td>
				<td>TotalPrice</td>
				<td>Delete</td>

			</tr>

			
				@foreach($data as $row)
					<tr>
						<td>{{ $row->title }}</td>
						<td><img src=" {{ $row->image }} " alt=" " class="image-responsive" width="150" height="150"></td>
						<td>{{$row ->amount}}</td>
						<td>{{$row ->price}}</td>
						<td>{{ $row->totalprice }}</td>
						<td>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				@endforeach

				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td>TOTAL</td>
					<td>{{ $total_price }}</td>
					<td></td>
				</tr>
		</table>


					<h1>Checking</h1>
						<form action="{{ route('route.check')}}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button class="btn btn-success">Checked</button>
			
						</form>

</body>
</html>
