<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Request;
use Illuminate\Http\Request;
use Illuminate\Validation;
//use Illuminate\Routing\Controller;
use App\User;
use App\Order;

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
            $user = new User;
            $users = $user->getListUser();
            
            return view('user.index', compact('users'));
	}
        
        /**
         * 
         * @return form input
         */
        public function order(){
            
            return view('user.order');
        }
        
        /**
         * Process order
         * 
         * @param Request $request
         * @return type
         */
        public function add(Request $request){
            $order = new Order;
            $result = $order->addOrder($request);
            
            if($result){
                return redirect('/');
            }
        }
        
        /**
         * Banned order 
         * 
         * @param int $id
         * @return type
         */
        public function bannedOrder($id){
            $order = new Order;
            $banned = $order->bannedOrder($id);
            
            if($banned){
                return redirect('/home');
            }
        }
        
        /**
         * Banned User
         * 
         * @param int $id
         */
        public function banned($id){
            $user = new User;
            $banned = $user->bannedUser($id);
            
            if($banned){
                return redirect('admin');
            }
        }
        
        public function active($id){
            $user = new User;
            $active = $user->bannedUser($id);
            
            if($active){
                return redirect('admin');
            }
        }

}
