<?php

class Work extends Eloquent {
    protected $table = 'works';
    public $timestamps = false;
    public function workgroup(){
      return $this->belongsTo('Workgroup');
    }
}
