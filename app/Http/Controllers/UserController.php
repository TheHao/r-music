<?php

namespace App\Http\Controllers;
use App\User;

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| User Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
//		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('user.index');
	}
        
        public function create()
        {
            try {
                $user = new User;
                $users = $user->getUser();
            } catch (Exception $ex) {
            }
               return view('user.order');
        }
        
        public function show()
        {
               return view('user.order');
        }        

}
