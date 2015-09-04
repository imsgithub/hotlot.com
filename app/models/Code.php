<?php

class Code extends Eloquent {
    protected $table = 'codes';
    public $timestamps = false;
    public function countries() {
        return $this->hasMany('Country');
    }
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
