<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use App\shirt;
use App\jean;

class ClotheController extends Controller {


	public function index()
	{
		
	}

	public function getTshirt()
	{
		return view('cloth.t_shirt');
	}

	public function postTshirt()
	{
		$user = new shirt;
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
	
	public function create()
	{
		
	}

	public function getJeans()
	{
		return view('cloth.jeans');
	}


	public function postJeans()
	{
		$user = new jean;
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


	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
