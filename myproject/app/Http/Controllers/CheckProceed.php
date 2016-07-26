<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cart;

use Illuminate\Http\Request;

class CheckProceed extends Controller {

	public function check()
	{
		$data = Cart::all();
		$total_price = Cart::with('shoe_male')->sum('totalprice');
		return view('CheckProceed.checkProduct',compact('data','total_price'));
	}

	public function userAuthentication()
	{
		return view('CheckProceed.proceedWithAuthentication');
	}
}
