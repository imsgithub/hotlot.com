<?php

class DeliveryForm extends Eloquent {
    protected $table= 'bids';
    public static $errors;
    public static $rules = [
        'price'=>'required|numeric',
        'cargo_name'=>'required',
        'cargo_price'=>'required|numeric',
        'weight'=>'required|numeric',
        'volume'=>'required|numeric',
        'number_of_seats'=>'required|numeric',
        'transport_type'=>'required',
        'route_from'=>'required',
        'route_where'=>'required',
        'load_datetime'=>'required|date_format:"Y-m-d H:i:s"',
        'load_transporter'=>'required',
        'load_address'=>'required',
        'load_phone'=>'required',
        'unload_datetime'=>'required|date_format:"Y-m-d H:i:s"',
        'unload_transporter'=>'required',
        'unload_address'=>'required',
        'unload_phone'=>'required',
    ];
    public function __construct() {
        if (Session::get('role')=='admin'){
            $this->guarded = ['id'];
        }
    }

    public static function is_valid($data) {
        $validator = Validator::make($data, static::$rules);
        if ($validator->passes()) {
            return true;
        }
        static::$errors = $validator->messages();
        return false;
    }
    public function user(){
      return $this->belongsTo('User');
    }
    public function contractType(){
      return $this->belongsTo('ContractType');
    }
    public function tax(){
      return $this->hasOne('Tax', 'bid_id');
    }
}
