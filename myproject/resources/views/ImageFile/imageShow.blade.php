<!DOCTYPE html>

<html>
	<head><title>Show Image Description</title></head>

	<body>
		
		@foreach($user as $show)
				
			<div class="thumbnail">

				<h3>{{ $show ->title}}</h3>
				<img src=" {{ $show -> image}}" alt=" " width="150" height="150">
					<p> {{ $show ->description}}</p>
					<div class="clearfix"> <a href="{{ route( 'getImage.imageFile')}} " class="btn btn-success pull-right" role="button">Add To Cart</a>
					</div>
			</div>

		@endforeach

	</body>

</html>