<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
//	protected $hidden = array('password', 'remember_token');
        public $timestamps = false;
        protected $fillable = ['email', 'password'];
//        protected $fillable =
//        public function __construct(Session $session) {
//            $this->session = $session;
//        }
        public static $rules = [
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ];
        public static $errors;
        public function roles() {
            return $this->belongsToMany('Role');
        }
        public function person() {
            return $this->hasOne('Person');
        }
        public function form() {
            return $this->hasMany('DeliveryForm');
        }
				public function work() {
					return $this->belongsToMany('Work', 'work_user');
				}
        public function is_valid($data){
            $validator = Validator::make($data, static::$rules);
            if ($validator->passes()) {
                return true;
            }
            static::$errors = $validator->messages();
            return FALSE;
        }
}
