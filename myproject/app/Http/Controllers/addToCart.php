<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use App\shoe_female;
use App\Cart;
use App\shoe_male;
use App\product;
use App\jean;
use App\shirt;
use App\mobileDevice;
use App\electronicDevice;

//use App\shoe_female;

class addToCart extends Controller {


	public function indexCart()
	{

		$data = Cart::all();


		$total_price = Cart::with('shoe_male')->sum('totalprice');
		var_dump($total_price);

		return view('Cart',compact('data','total_price'));
	}

	public function edeviceCart()
	{
		 $data = Cart::all();


		$total_price = Cart::with('electronicDevice')->sum('totalprice');
		var_dump($total_price);

		return view('Cart',compact('data','total_price'));
	}


/*
	public function laptopCartPage()
	{
		$amount = Input::get('amount');

		$productLaptopId = Input::get('laptop');
		$productLaptop = product::find($productLaptopId);

		//var_dump($productMaleShoe);



		$price = $productLaptop->price;
		$image = $productLaptop->imagePath;
		$title =$productLaptop->title;
		$totalprice = $amount * $price;


		Cart::create([
				'title' => $title,
				'image' => $image,
				'amount' => $amount,
				'price' => $price,
				'totalprice'=>$totalprice

			]);
		 return redirect()->route('cart');

	}
*/  
	

	public function eDeviceCartPage()
	{
		$amount = Input::get('amount');

		$productEdeviceId = Input::get('Edevice');

		var_dump($productEdeviceId);
	
		$productEdevice = electronicDevice::find($productEdeviceId);

		var_dump($productEdevice);



		$price = $productEdevice->price;
		$image = $productEdevice->imagePath;
		$title =$productEdevice->title;
		$totalprice = $amount * $price;


		Cart::create([
				'title' => $title,
				'image' => $image,
				'amount' => $amount,
				'price' => $price,
				'totalprice'=>$totalprice

			]);
		 return redirect()->route('cart');
		 

	}

		public function mobileCartPage()
	{

		$amount = Input::get('amount');

		$productMobileId = Input::get('mobile');
		$productMobile = mobileDevice::find($productMobileId);

		//var_dump($productMaleShoe);



		$price = $productMobile->price;
		$image = $productMobile->imagePath;
		$title =$productMobile->title;
		$totalprice = $amount * $price;


		Cart::create([
				'title' => $title,
				'image' => $image,
				'amount' => $amount,
				'price' => $price,
				'totalprice'=>$totalprice

			]);
		 return redirect()->route('cart');

	}
	public function TshirtCartPage()
	{
		$amount = Input::get('amount');

		$productShirtId = Input::get('Tshirt');
		$productShirt = shirt::find($productShirtId);

		//var_dump($productMaleShoe);



		$price = $productShirt->price;
		$image = $productShirt->imagePath;
		$title =$productShirt->title;
		$totalprice = $amount * $price;


		Cart::create([
				'title' => $title,
				'image' => $image,
				'amount' => $amount,
				'price' => $price,
				'totalprice'=>$totalprice

			]);
		 return redirect()->route('cart');

	}

	public function jeansCartPage()
	{
		$amount = Input::get('amount');

		$productJeanId = Input::get('jeans');
		$productJean = jean::find($productJeanId);

		//var_dump($productMaleShoe);



		$price = $productJean->price;
		$image = $productJean->imagePath;
		$title =$productJean->title;
		$totalprice = $amount * $price;


		Cart::create([
				'title' => $title,
				'image' => $image,
				'amount' => $amount,
				'price' => $price,
				'totalprice'=>$totalprice

			]);
		 return redirect()->route('cart');

	}





	public function CartPage()
	{
		$amount = Input::get('amount');

		$product_id = Input::get('femaleShoe');
		$product = shoe_female::find($product_id);


		//$productMaleId = Input::get('maleshoe');
		//$productMaleShoe = shoe_male::find($productMaleId);

		

		$price = $product->price;
		$image = $product->imagePath;
		$title =$product->title;
		$totalprice = $amount * $price;

		Cart::create([
				'title' => $title,
				'image' => $image,
				'amount' => $amount,
				'price' => $price,
				'totalprice'=>$totalprice

			]);
		 return redirect()->route('cart');

	}
	



	public function maleCartPage()
	{
		$amount = Input::get('amount');

		$productMaleId = Input::get('maleshoe');
		$productMaleShoe = shoe_male::find($productMaleId);

		$price = $productMaleShoe->price;
		$image = $productMaleShoe->imagePath;
		$title =$productMaleShoe->title;
		$totalprice = $amount * $price;


		Cart::create([
				'title' => $title,
				'image' => $image,
				'amount' => $amount,
				'price' => $price,
				'totalprice'=>$totalprice

			]);
		 return redirect()->route('cart');


	}

	


}
