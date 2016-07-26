<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\user;
use App\Cart;
use Auth;

class UserController extends Controller {


	public function GetSignUp()
	{
		return view('user.signUp');
	}

	public function PostSignUp(Request $request)
	{
		$this ->validate($request,[

			'email' => 'email | required | unique:users',
			'password' => 'required | min:4'
		]);

		$user = new User([
				'email' => $request ->input('email'),
				'password' => bcrypt($request ->input('password'))

			]);
		$user->save();

		//return redirect()->route('index.product');
		return redirect()->route('user.signIn');

	}

	public function GetSignIn()
	{
		return view('user.signIn');
	}

	public function PostSignIn(Request $request)
	{
		$this ->validate($request,[

		'email' => 'email | required ',
		'password' => 'required | min:4'
		]);

		if(Auth::attempt(['email' => $request ->input('email'),'password' => $request->input('password')]))
		{
			//return redirect()->route('user.profile');
			$email = ['email' => $request ->input('email')];
			$password = ['password' => $request ->input('password')];


			$data = Cart::all();
			$total_price = Cart::with('shoe_male')->sum('totalprice');

			//return view('user.profile',compact('email','password','data','total_price'));
			//return view('memo.cashmemo',compact('email','password'));
			//return redirect()->route('route.cashmemo');

			return view('memo.FinalMemo',compact('email','password','data','total_price'));


			/////////// This is for Final Memo............
			//return redirect()->route('route.FinalMemo');


		}
		else{
			return redirect()->route('user.GetsignUp');	
			//return redirect()->back();
		}

		

	}

}
