<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
 
<body>

		<h3 style="text-align:center;background-color:gray">Final Destination</h3>
		

			@if( $total_price > $data  )
					<h5 style="background-color:gray; text-align:center;width:100px; height:50px; padding:60px;margin-left:200px;magrin-top:1px" >please Give: {{$total_price - $data}} TK
					</h5>
					
	
			@elseif( $total_price < $data )
					<h5 style="background-color:gray;text-align:center; width:100px; height:50px; padding:60px;margin-left:200px">Cash back:{{ $data - $total_price}}TK</h5>

					
				
			@elseif( $total_price == $data )
					<h5 style="background-color:gray;text-align:center; width:100px; height:50px; padding:60px;margin-left:200px">Thank you... Hope See You Again... :)</h5>
				
			@else
				<h5 style="background-color:gray;text-align:center; width:100px; height:50px; padding:60px;margin-left:200px">Something is Went Wrong</h5>
				
			@endif


</body>
</html>