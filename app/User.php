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
	protected $fillable = ['name', 'email', 'image','banned_flg', 'del_flg', 'admin_flg', 'created_at', 'updated_at'];

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
         * Get user by id
         * 
         * @param int $id
         * @return object
         */
        public function getUser($id){
            $user =  DB::table('users')
                    ->whereId($id)
                    ->first();
            
            return $user;
        }

                /**
         * Banned User
         * 
         * @param int $id
         * @return boolean
         */
        public function bannedUser($id){
            $banned = DB::table('users')
                        ->where('id', $id)
                        ->update(['banned_flg' => self::BANNED_FLG_TRUE, 'updated_at' => date("Y-m-d H:i:s")]);
            
            return $banned;
        }
        
        /**
         * Actived User
         * 
         * @param int $id
         * @return boolean
         */
        public function activedUser($id){
            $actived = DB::table('users')
                        ->where('id', $id)
                        ->update(['banned_flg' => self::BANNED_FLG_FLASE, 'updated_at' => date("Y-m-d H:i:s")]);
            
            return $actived;
        }
        
        /**
         * Update user info
         * 
         * @param object $data
         * @return boolean
         */
        public function updateUser($data){
            $updated = DB::table('users')
                        ->where('id', $data->id)
                        ->update(['name' => $data->name, 'email' => $data->email, 'banned_flg' =>  !is_null($data->banned_flg)? self::BANNED_FLG_TRUE : self::BANNED_FLG_FLASE, 'updated_at' => date("Y-m-d H:i:s")]);
            
            return $updated;
        }

}
