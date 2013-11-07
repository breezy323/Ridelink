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

		//this should be validate

		//store in session
		Session::put('test', $data);

		return Redirect::route('booking.create');
	}

}