<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Validation;
class Order extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';
        
        /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'song_name', 'song_url', 'status', 'recipient', 'comment', 'is_invisible', 'date', 'banned_flg', 'special_flg', 'special_reason', 'created_at', 'updated_at'];
        
        /**
         * Const Init
         */
        const BANNED_FLG_TRUE = 1;
        const BANNED_FLG_FLASE = 0;
        
        /**
         * Status
         */
        const STATUS_ADD_NEW = 0;
        const STATUS_CHOISE_AM = 1;
        const STATUS_CHOISE_PM = 2;
        
        /**
         * Special flag
         */
        const SPECIAL_FLG_TRUE = 1;
        const SPECIAL_FLG_FLASE = 0;
        
        /**
         * IS INVISIBLE
         */
        const IS_INVISIBLE_TRUE = 1;
        const IS_INVISIBLE_FALSE = 0;

        /**
         * TIME START END
         */
        const START_TIME = " 00:00:00";
        const END_TIME = " 23:59:59";
        
        /**
         * FORMAT DATE
         */
        const FORMAT_DATE_BASE = "Y-m-d";
        const FORMAT_DATE_EXTENDS = "j F Y";
        
        /**
         * Get all order by date
         * 
         * @param string $date
         * @return array object
         */
        public function getOrders($date = null){
            $orders = DB::table('orders')
                    ->where('created_at', '>', $date. self::START_TIME)
                    ->where('created_at', '<=', $date. self::END_TIME)
                    ->orderBy('id', 'desc')
                    ->get();
            
            return $orders;
        }
        
        /**
         * Get choisr order AM, PM
         * 
         * @param string $date
         * @param int $status_flg
         * @return array object
         */
        public function getChoiseOrders($date = null, $status_flg = null){
            $orders = DB::table('orders')
                    ->where('created_at', '>', $date. self::START_TIME)
                    ->where('created_at', '<=', $date. self::END_TIME)
                    ->where('status', '=', $status_flg)
                    ->get();
            
            return $orders;
        }

        /**
         * Get creatd at
         * @return string
         */
        public function getCreatedAtLastOrderInsert(){
            $order = DB::table('orders')
                    ->orderBy('id', 'desc')
                    ->first();
            $createdAt = $this->converstDate(self::FORMAT_DATE_BASE, $order->created_at);
            
            return $createdAt;
        }
        
        /**
         * Get first order
         * 
         * @param string $date
         * @return object
         */
        public function getFirstOrderByDate($date){
            $order = DB::table('orders')
                    ->where('created_at', '>', $date. self::START_TIME)
                    ->where('created_at', '<=', $date. self::END_TIME)
                    ->first();
            
            return $order;
        }
        
        /**
         * Get Prev date
         * 
         * @param string $date
         * @return string
         */
        public function getPrevDate($date){
            $prevDate = null;
            for($i = 1; $i <= 7; $i ++){
                $prevDate = date(self::FORMAT_DATE_BASE,strtotime($date."-". $i. "days"));
                $order = $this->getFirstOrderByDate($prevDate);
                if(!empty($order)){
                    break;
                }
            }
            
            return $prevDate;
        }

        /**
         * 
         * @param type $format
         * @param type $date
         * @return type
         */
        public function converstDate($format, $date){
            $date = date($format, strtotime($date));
            
            return $date;
        }
        
        /**
         * Add new order
         * 
         * @param object $data
         * @return boolean
         */
        public function addOrder($data){
            
            $date = date("Y-m-d H:i:s");
            $this->user_id = 1;
            $this->song_name = $data->song_name;
            $this->song_url = $data->song_url;
            $this->recipient = $data->recipient;
            $this->comment = $data->comment;
            $this->is_invisible = is_null($data->is_invisible)? self::IS_INVISIBLE_FALSE : $data->is_invisible;
            $this->status = self::STATUS_ADD_NEW;
            $this->date = $date;
            $this->special_flg = is_null($data->special_flg)? self::SPECIAL_FLG_FLASE : $data->special_flg;
            $this->special_reason = $data->special_reason;
            $this->created_at = $date;
            $this->updated_at = $date;
            
            return $this->save();
        }

        /**
         * Banned order
         * @param int $id
         * @return boolean
         */
        public function bannedOrder($id){
            $this->id = $id;
            $this->banned_flg = self::BANNED_FLG_TRUE;
            
            return $this->save();
        }

}
