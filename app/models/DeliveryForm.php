<?php

class DeliveryForm extends Eloquent {
    protected $table= 'forms';
    public static $errors;
    public static $rules = [
        'kind_of_transport'=>'required',
        'cargo_name'=>'required',
        'number_of_seats'=>'required',
        'volume'=>'required|numeric|min:0.1|max:132',
        'weight'=>'required|numeric|min:0.1|max:22',
        'load_address'=>'required',
        'unloading_address'=>'required',
        'load_datetime'=>'required|date_format:"Y-m-d H:i:s"',
        'delivery_datetime'=>'required|date_format:"Y-m-d H:i:s"',
        'method_of_payment'=>'required',
    ];
    public static function is_valid($data) {
        $validator = Validator::make($data, static::$rules);
        if ($validator->passes()) {
            return true;
        }
        static::$errors = $validator->messages();
        return false;
    }
}
