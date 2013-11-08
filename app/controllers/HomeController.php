<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		return View::make('ridelink.index');
	}

	public function bookFromIndex()
	{
		$data = Input::all();

		//validate
		$rules = array(
			'pickup_type' => 'required',
			'pickup_date' => 'required',
			'pickup_location' => 'required',
			'drop_location' => 'required'
		);

		$validator = Validator::make($data, $rules);

		if ($validator->fails()) 
		{
			return Response::json($validator);
		}

		//store in session
		Session::put('test', $data);

		return Redirect::route('booking.create');
	}

}