<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Request;
use Illuminate\Http\Request;
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
		return view('user.index');
	}
        
        public function order(){
            
            return view('user.order');
        }
        
        public function add(Request $request){
            $order = new Order;
            $order->user_id = $request->input('user_id');
            $order->song_name = $request->input('song_name');
            $order->song_url = $request->input('song_url');
            $order->recipient = $request->input('recipient');
            $order->comment = $request->input('comment');
            $order->status = 1;
            $order->date = date("Y-m-d H:i:s");
            $order->special_flg = 0;
            $order->special_reason = "abc";
            $order->created_at = date("Y-m-d H:i:s");
            $order->modified_at = date("Y-m-d H:i:s");
            $order->updated_at = date("Y-m-d H:i:s");
            if($order->save()){
                return redirect('/home');
            }
        }

}
