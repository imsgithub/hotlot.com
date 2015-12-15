<?php

class DeliveryForm extends Eloquent {
    protected $table= 'bids';
    public static $errors;
    public static $rules = [
        // 'kind_of_transport'=>'required',
        // 'cargo_name'=>'required',
        // 'number_of_seats'=>'required',
        // 'volume'=>'required',
        // 'weight'=>'required',
        // 'load_address'=>'required',
        // 'unloading_address'=>'required',
        // 'load_datetime'=>'required|date_format:"Y-m-d H:i:s"',
        // 'delivery_datetime'=>'required|date_format:"Y-m-d H:i:s"',
        // 'method_of_payment'=>'required',
        //Новая заявка
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
        //Поля после подтверждения заявки
        // 'company_name'=>'required',
        // 'user_name'=>'required',
        // 'user_surname'=>'required',
        // 'user_patronymic'=>'required',
        // 'requisiites'=>'required',
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
}
