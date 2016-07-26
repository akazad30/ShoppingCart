<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use App\shoe_female;
use App\shoe_male;


class ShoeController extends Controller {



	public function getMaleShoe()
	{
		return view('shoes.shoe');
	}
	public function postMaleShoe()
	{
		$user = new shoe_male;
		$user->title =Input::get('title');

		
		if(Input::hasfile('image'))
		{
			$file = Input::file('image');

			$file->move(public_path().'/',$file ->getClientOriginalName());

			$user->imagePath = $file->getClientOriginalName();
		}
		

		$user ->description=Input::get('description');
		$user ->price=Input::get('price');


		$res = $user->save();
		if($res)
		{
			//return redirect()->route('index.addProduct')->with('data inserted successfully');
			return redirect()->back()->with('session','Data inserted successfully');
		}
		else
		{
			return 'sorry!!!!  data is not inserted';
		}

		
	}







	public function getFemaleShoe()
	{
		return view('shoes.femaleShoe');
	}

	public function postFemaleShoe()
	{
		$user = new shoe_female;
		$user->title =Input::get('title');

		
		if(Input::hasfile('image'))
		{
			$file = Input::file('image');

			$file->move(public_path().'/',$file ->getClientOriginalName());

			$user->imagePath = $file->getClientOriginalName();
		}
		

		$user ->description=Input::get('description');
		$user ->price=Input::get('price');


		$res = $user->save();
		if($res)
		{
			//return redirect()->route('index.addProduct')->with('data inserted successfully');
			return redirect()->back()->with('session','Data inserted successfully');
		}
		else
		{
			//return 'sorry!!!!  data is not inserted';
		}
	}

	public function show($id)
	{
		
	}


	public function edit($id)
	{
		
	}


	public function update($id)
	{
		
	}


	public function destroy($id)
	{
		
	}

}
