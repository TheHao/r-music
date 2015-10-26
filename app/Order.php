<?php namespace App;

use Illuminate\Database\Eloquent\Model;

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
	protected $fillable = ['user_id', 'song_name', 'song_url', 'status', 'recipient', 'comment', 'date', 'special_flg', 'special_reason', 'created_at', 'updated_at'];
        
        /**
         * Const Init
         */
        const BANNED_FLG_TRUE = 1;
        const BANNED_FLG_FLASE = 0;


        public function getOrders(){
            return $this->all();
        }
        
        public function bannedOrder($id){
            $this->id = $id;
            $this->banned_flg = self::BANNED_FLG_TRUE;
            
            return $this->save();
        }

}
