<?php

class Post extends Eloquent {
	//$l = Session::get('lang');
	protected $languiges = array('en' => 'en_blocks', 'ru' => 'ru_blocks');
    protected $table = 'ru_blocks';
    public $timestamps = false;
    /*public function workgroup(){
      return $this->belongsTo('Workgroup');
    }*/
}
