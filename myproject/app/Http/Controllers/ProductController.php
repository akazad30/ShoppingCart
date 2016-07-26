<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\product;
use App\electronicDevice;
use App\mobileDevice;
use App\shirt;
use App\jean;
use App\shoe_male;
use App\shoe_female;
class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		//$data = product::all();
		$edevice = electronicDevice::all();
		$mobileDevice = mobileDevice::all();
		$shirt = shirt::all();
		$jeansPant = jean::all();
		$maleShoe = shoe_male::all();
		$femaleShoe = shoe_female::all();
		//$femaleShoe = shoe_female::find($id);

		return view('shop.index',compact('edevice','mobileDevice','shirt','jeansPant','maleShoe','femaleShoe'));
	}

	public function addProduct()
	{
		//return view('AddProductPage.addProduct');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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
