<?php namespace App\Http\Controllers;
use App\Order;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
            $order = new Order;
            
            $today = $order->getCratedAtLastOrderInsert();
            $yesterday = $order->getPrevDate($today);
            $afterYesterday = $order->getPrevDate($yesterday);
            
            $todayOrders = $order->getOrders($today);
            $todayChoiseAms = $order->getChoiseOrders($today, Order::STATUS_CHOISE_AM);
            $todayChoisePms = $order->getChoiseOrders($today, Order::STATUS_CHOISE_PM);
            
            $yesterdayOrders = $order->getOrders($yesterday);
            $yesterdayChoiseAms = $order->getChoiseOrders($yesterday, Order::STATUS_CHOISE_AM);
            $yesterdayChoisePms = $order->getChoiseOrders($yesterday, Order::STATUS_CHOISE_PM);
            
            $afterYesterdayOrders = $order->getOrders($afterYesterday);
            $afterYesterdayChoiseAms = $order->getChoiseOrders($afterYesterday, Order::STATUS_CHOISE_AM);
            $afterYesterdayChoisePms = $order->getChoiseOrders($afterYesterday, Order::STATUS_CHOISE_PM);
            
            // convert date
            $today = $order->converstDate(Order::FORMAT_DATE_EXTENDS, $today);
            $yesterday = $order->converstDate(Order::FORMAT_DATE_EXTENDS, $yesterday);
            $afterYesterday = $order->converstDate(Order::FORMAT_DATE_EXTENDS, $afterYesterday);

            return view('welcome', compact('today', 'todayOrders', 'todayChoiseAms', 'todayChoisePms', 'yesterday', 'yesterdayOrders', 'yesterdayChoiseAms', 'yesterdayChoisePms', 'afterYesterday', 'afterYesterdayOrders', 'afterYesterdayChoiseAms', 'afterYesterdayChoisePms'));
	}

}
