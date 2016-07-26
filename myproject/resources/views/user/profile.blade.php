<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
 
<body>

  <h3>User Profile</h3>
   @foreach($email as $res)
   		<li>
   			{{ $res }}
   		</li>

   @endforeach

   <table border="2" class="table table-hover" style="background-color:gray; ">
			<tr>
				<td>Quantity</td>
				<td>Description</td>
				<td>Rate</td>
				<td>Amount</td>
				<td><input type="date">select date</input></td>

			</tr>

				@foreach($data as $row)
					<tr>
						<td>{{ $row->amount }}</td>
						<td>{{ 'Have A Nice Day' }}</td>
						<td>{{$row ->price}}</td>
						<td>{{ $row->totalprice }}</td>

					</tr>
				@endforeach

				<tr class="danger">

					<td></td>
					<td></td>
					<td style="background-color:white">TOTAL</td>
					<td style="background-color:white">{{ $total_price }}</td>
					<td></td>
				</tr>
				<td><a href="">Download</a></td>

		</table>
					

</body>
</html>