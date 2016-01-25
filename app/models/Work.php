<?php

class Work extends Eloquent {
    protected $table;// = 'works';
    public $timestamps = false;
    public $lang = 'ru';
    public function __construct() {
        if(!empty(Session::get('lang'))){
        	$this->lang = Session::get('lang');;
        }
        $this->table = $this->lang.'_works';
    }
    public function workgroup(){
      return $this->belongsTo('Workgroup');
    }
}
/**
* 
*/
