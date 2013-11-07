<?php

class AdminController extends \BaseController {

	public function showLogin()
	{
		if (Sentry::check()) {
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

		try {
			$adminGroup = Sentry::findGroupByName('Administrators');
			$user = Sentry::authenticate($credentials, false);

			if ($user->inGroup($adminGroup))
			{
				return Redirect::route('admin');
			}
			else {
				//user is not an admin!

				//logout
				Sentry::logout();

				return Redirect::back()->with(array(
					'error' => true,
					'message' => 'User is not an administrator'
				));
			}
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			//missing username
			return Redirect::back()->with(array(
				'error' => true,
				'message' => 'Username is required'
			));
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			//missing password
			return Redirect::back()->with(array(
				'error' => true,
				'message' => 'Password is required'
			));
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
			//bad password
			return Redirect::back()->with(array(
				'error' => true,
				'message' => 'Password not recognized'
			));
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			//user not found
			return Redirect::back()->with(array(
				'error' => true,
				'message' => 'User does not exist'
			));
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
			//user is not activated
			return Redirect::back()->with(array(
				'error' => true,
				'message' => 'User is not activated'
			));
		}

		//Throttle stuff
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
			//suspended user
			return Redirect::back()->with(array(
				'error' => true,
				'message' => 'User is suspended'
			));
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
			//banned
			return Redirect::back()->with(array(
				'error' => true,
				'message' => 'User is banned'
			));
		}
	}

	public function handleLogout()
	{
		Sentry::logout();

		if (!Sentry::check()) {
			return Redirect::route('admin.login')->with(array(
				'logout' => true,
				'message' => 'Admin successfully logged out.'
			));
		}	
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$user = Sentry::getUser();

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