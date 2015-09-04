<?php

class Country extends Eloquent {
    protected $table = 'countries';   
    protected $fillable = ['id', 'end', 'value'];
    public $timestamps = false;
//    public static $rules = array(
//                'start'=>'required|min:1|max:2',
//                'end'=>'required|min:1|max:2',
//                'value'=>'required|regex:/[\d\.,]/'                
//            );
//    public static $errors;
//    public static function is_valid($data) {
//        $validator = Validator::make($data, static::$rules);
//        if ($validator->passes()) {
//            return TRUE;                
//        }
//        static::$errors = $validator->messages();
//        return FALSE;
//    }
}
