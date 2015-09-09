<?php

class Person extends Eloquent {
    protected $table= 'persons';
    public $timestamps= false;
    public static $errors;
    public static $rules = [
        'name'=>'required|min:2',
        'surname'=>'required|min:2'
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
