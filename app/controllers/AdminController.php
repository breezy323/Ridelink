<?php

class AdminController extends \BaseController {

	public function showLogin()
	{
		if (Auth::check()) {
			return Redirect::route('admin');
		}

		$data = [
			'title' => 'RideLink Admin :: Login'
		];

		return View::make('ridelink.admin.login', $data);
	}

	public function handleLogin()
	{
		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		//validate
		//TODO: validate the form!

		if (Auth::attempt($credentials)) {
			$user = Auth::user();

			if (!$user->admin) {
				return Redirect::back()->with(array(
					'error' => true,
					'message' => 'User is not an admin.'
				));
			}

			return Redirect::route('admin');
		}
		else {
			return Redirect::back()->with(array(
				'error' => true,
				'message' => 'user not found.'
			));
		}
	}

	public function handleLogout()
	{
		Auth::logout();

		return Redirect::route('admin.login')->with(array(
			'logout' => true,
			'message' => 'Admin successfully logged out.'
		));	
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$user = Auth::user();

		return View::make('ridelink.admin.index')->with(array(
			'user' => $user
		));
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