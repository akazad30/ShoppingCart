<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use App\user;
use Auth;
use DB;


class OrderController extends Controller {


	public function index()
	{
		
	}

	public function getOrder()
	{
		$data = Input::get('address');
		var_dump($data);

		 $records = [
    					[DB::table('users')->where('id', '=', '1')->get(['email'])]
					];

					var_dump($records);


					 $users = [
    					[DB::table('users')->where('email', '=', 'abulkalam129@gmail.com')->get(['id'])]
					];

					var_dump($users);


	}

	public function create()
	{
		
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
