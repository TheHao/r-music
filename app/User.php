<?php namespace App;

use Illuminate\Auth\Authenticatable;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'image', 'status', 'del_flg', 'admin_flg', 'created_at', 'modified_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];
        
        const BANNED_FLG_TRUE = 1;
        const BANNED_FLG_FLASE = 0;
        
        /**
         * Get List User
         * 
         * @return array
         */
        public function getListUser(){
            $users = DB::table('users')
                    ->orderBy('id', 'desc')
                    ->get();
            
            return $users;
        }
        
        /**
         * Banned User
         * 
         * @param int $id
         * @return boolean
         */
        public function bannedUser($id){
            $this->id = $id;
            $this->banned_flg = self::BANNED_FLG_TRUE;
            
            return $this->save();
        }

}
