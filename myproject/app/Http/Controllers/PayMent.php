<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use App\Cart;
use App\user;
use Illuminate\Http\Request;

class PayMent extends Controller {
	public function PayMentPage()
	{
		//$email = ['email' => $request ->input('email')];
		$data = Cart::all();
		$total_product = Cart::with('shoe_male')->sum('amount');
		$total_price = Cart::with('shoe_male')->sum('totalprice');
		
		return view('payment.paymentPage',compact('data','total_product','total_price'));

		//return view('payment.paymentPage');
	}

	public function shoppingComplete(Request $request)
	{	
		$data = input::get('payment');
		$total_price = Cart::with('shoe_male')->sum('totalprice');

		return view('shopping.shopping',compact('data','total_price'));
	}

}
