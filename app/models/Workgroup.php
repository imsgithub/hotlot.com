<?php
class Workgroup extends Eloquent {
    protected $table;// = 'workgroups';
    public $timestamps = false;
    public $lang = 'ru';
    public function __construct() {
        if(!empty(Session::get('lang'))){
        	$this->lang = Session::get('lang');;
        }
        $this->table = $this->lang.'_workgroups';
    }
    public function work(){
      return $this->hasMany('Work');
    }
}

/**
* class Workgroup extends Eloquent {
    protected $table = 'workgroups';
    public $timestamps = false;
    public function work(){
      return $this->hasMany('Work');
    }
}
*/