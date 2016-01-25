<?php

class Content extends Eloquent {
	//$l = 
	protected $table;
	public $lang = 'ru';
	public function __construct() {
        if(!empty(Session::get('lang'))){
        	$this->lang = Session::get('lang');;
        }
        $this->table = $this->lang.'_blocks';
    }
    //protected $table = 'ru_blocks';
    public $timestamps = false;
    /*public function workgroup(){
      return $this->belongsTo('Workgroup');
    }*/
}
	