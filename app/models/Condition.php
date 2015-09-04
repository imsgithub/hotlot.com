<?php

class Condition extends Eloquent {
    protected $table = 'conditions';
    public $timestamps = false;
    public function order() {
        return $this->hasMany('Order');
    }
}
