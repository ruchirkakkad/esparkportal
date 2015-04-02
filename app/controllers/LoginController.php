<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /login
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('login');
	}
    public function logout()
	{
        Auth::logout();
        return 1;
	}
    public function checklogin()
	{
        $credentials = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];

        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
        {
            return 1;
        }
        else
        {
            return 0;
        }
	}
   public function checkAuthentication()
   {
        if (Auth::check())
        {
            return 1;
        }
        else
        {
            return 0;
        }
	}

    public function dashboard()
    {
        return View::make('dashboard');
    }




}