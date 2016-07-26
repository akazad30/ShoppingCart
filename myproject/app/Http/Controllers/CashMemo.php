<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cart;
use App\user;
use Illuminate\Http\Request;

class CashMemo extends Controller {

	public function memo()
	{
			//$email = ['email' => $request ->input('email')];
			//$password = ['password' => $request ->input('password')];
		$data = Cart::all();
		$total_price = Cart::with('shoe_male')->sum('totalprice');
		//return view('memo.cashmemo',compact('data','total_price'));
	}

	public function FinalMemo()
	{
		$email = ['email' => $request ->input('email')];
		$password = ['password' => $request ->input('password')];
		
		$data = Cart::all();
		$total_price = Cart::with('shoe_male')->sum('totalprice');
		return view('memo.FinalMemo',compact('data','total_price'));
		//return view('memo.FinalMemo');
	}

}
