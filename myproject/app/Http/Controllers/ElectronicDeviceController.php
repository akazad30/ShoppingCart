<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use App\ElectronicDevice;

class ElectronicDeviceController extends Controller {

	public function index()
	{
		
	}

	public function getDevice()
	{
		return view('ElectronicDevice.getElectronicDevice');

	}

	public function postDevice()
	{
		$user = new ElectronicDevice;

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

	public function store()
	{
		
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
