<?php

class Workgroup extends Eloquent {
    protected $table = 'workgroups';
    public $timestamps = false;
    public function work(){
      return $this->hasMany('Work');
    }
}
