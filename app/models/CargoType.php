<?php

class CargoType extends Eloquent {
    protected $table;//='cargo_types';
    public $timestamps = false;
    public $lang = 'ru';
    public function __construct() {
        if(!empty(Session::get('lang'))){
        	$this->lang = Session::get('lang');
        }
        $this->table = $this->lang.'_cargo_types';
    }
}