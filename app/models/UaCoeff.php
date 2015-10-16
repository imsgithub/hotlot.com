<?php

class UaCoeff extends Eloquent {
    protected $table = 'ua_coeffs';    
    protected $fillable = array('start_id', 'end_id', 'value');
    public $timestamps=false;
    public static $rules = [
        'value'=>'required|regex:/(?:\d*\.)?\d+/',
        'start_id' => 'required|integer',
        'end_id' => 'required|integer'
    ];
    
    public function start(){
        return $this->hasOne('UaArea','id', 'start_id');//объект на который ссылается таблица; поле, НА которое ссылается; поле, С которого ссылается
    }
    public function end(){
        return $this->hasOne('UaArea', 'id', 'end_id');
    }
    public static function isValid($data){
        $validation = Validator::make($data, static::$rules);
        if ($validation->fails()) {
            return FALSE;
        }
        return TRUE;
    }
}