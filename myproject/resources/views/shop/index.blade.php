@extends('layout.master')

@section('title')
	ShoppingCart Project
@endsection


@section('content')

			<div class="row">
					<h4 style="center"><i>Product_Edevice:</i></h4>

					<div class="row">
						@foreach($edevice as $device)
							 <div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      <img src=" {{ $device->imagePath }} " alt=" " class="image-responsive" width="150" height="150">
							      <div class="caption">
							        <h3>ProductTitle: {{ $device ->title}}</h3>
							        <p class="description">{{ $device->description}}</p>
										<div class="pull-left price">
											Price:{{ $device ->price }}
										</div>
							        	<div class="clearfix">
							        	</div>
							      </div>
							   
							 

			  						<form method="POST" action = " {{ route('addToCartElectronicsDevice.Cart') }}">
										<input type="hidden" name="Edevice" value="{{ $device->id }}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<label for="">Amount</label>
										<select name="amount" id="">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
										<button class="btn btn-danger">AddToCart</button>
								
									</form>
								 </div>
								</div>

						@endforeach
					</div>

					<h4 style="center"><i>Product_MobileDevice:</i></h4>

					<div class="row">
						@foreach($mobileDevice as $mobile)
							 <div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      <img src=" {{ $mobile->imagePath }} " alt=" " class="image-responsive" width="150" height="150">
							      <div class="caption">
							        <h3>ProductTitle: {{ $mobile ->title}}</h3>
							        <p class="description">{{ $mobile->description}}</p>
										<div class="pull-left price">
											Price:{{ $mobile ->price }}
										</div>
							        	<div class="clearfix">
							        	</div>
							      </div>
							  

							  	<form method="POST" action = " {{ route('addToCartMobile.Cart') }}">
									<input type="hidden" name="mobile" value="{{ $mobile->id }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<label for="">Amount</label>
									<select name="amount" id="">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
									<button class="btn btn-danger">AddToCart</button>
							
								</form>
								</div>
							 </div>
						@endforeach
					</div>




				<h4 style="center"><i>Product_TSHIRT:</i></h4>
					<div class="row">
						@foreach($shirt as $srt)
							 <div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      <img src=" {{ $srt->imagePath }} " alt=" " class="image-responsive" width="150" height="150">
							      <div class="caption">
							        <h3>ProductTitle: {{ $srt ->title}}</h3>
							        <p class="description">{{ $srt->description}}</p>
										<div class="pull-left price">
											Price:{{ $srt-> price }}
										</div>
							        	<div class="clearfix">
							        	</div>
							      </div>
							   
	  							<form method="POST" action = " {{ route('addToCartTshirt.Cart') }}">
									<input type="hidden" name="Tshirt" value="{{ $srt->id }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<label for="">Amount</label>
									<select name="amount" id="">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
									<button class="btn btn-danger">AddToCart</button>
							
								</form>
								 </div>
							  </div>

						@endforeach
					</div>



				<h4 style="center"><i>Product_Jeans:</i></h4>
					<div class="row">
						@foreach($jeansPant as $jns)
							 <div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      <img src=" {{ $jns->imagePath }} " alt=" " class="image-responsive" width="150" height="150">
							      <div class="caption">
							        <h3>ProductTitle: {{ $jns ->title}}</h3>
							        <p class="description">{{ $jns->description}}</p>
										<div class="pull-left price">
											Price:{{ $jns-> price }}
										</div>
							        	<div class="clearfix">
							        	</div>
							      </div>
							


							  <form method="POST" action = " {{ route('addToCartJeans.Cart') }}">
									<input type="hidden" name="jeans" value="{{ $jns->id }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<label for="">Amount</label>
									<select name="amount" id="">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
									<button class="btn btn-danger">AddToCart</button>
							
							</form>
							    </div>
							  </div>
						@endforeach
					</div>


						<h4 style="center"><i>Product_MaleShoe:</i></h4>
					<div class="row">
						@foreach($maleShoe as $male)
							 <div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      <img src=" {{ $male->imagePath }} " alt=" " class="image-responsive" width="150" height="150">
							      <div class="caption">
							        <h3>ProductTitle: {{ $male ->title}}</h3>
							        <p class="description">{{ $male->description}}</p>
										<div class="pull-left price">
											Price:{{ $male-> price }}
										</div>
							        	<div class="clearfix"> 
							        	</div>
							      </div>
							  
							  <form method="POST" action = " {{ route('addToCartMale.Cart') }}">
									<input type="hidden" name="maleshoe" value="{{ $male->id }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<label for="">Amount</label>
									<select name="amount" id="">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
									<button class="btn btn-danger">AddToCart</button>
							
							</form>
							  </div>
							  </div>

						@endforeach
					</div>



	<div class="row">

			@foreach($femaleShoe as $female)

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src=" {{ $female->imagePath }} " alt=" " class="image-responsive" width="150" height="150">
							<div class="caption">
								<h3>ProductTitle: {{ $female ->title}}</h3>
								<p class="description">{{ $female->description}}</p>
								<div class="pull-left price">
										Price:{{ $female-> price }}
								</div>
									<div class="clearfix"> 
							        	</div>
									        
							</div>
					

				<form method="POST" action = " {{ route('addToCartFemale.Cart') }} ">
					<input type="hidden" name="femaleShoe" value="{{ $female->id }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<label for="">Amount</label>
					<select name="amount" id="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<button class="btn btn-danger">AddToCart</button>
				
				</form>

				</div>

				</div>
			@endforeach

		
	</div>




	</div>

@endsection