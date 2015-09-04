<?php

class Coeff extends Eloquent {
    protected $table = 'coeffs';
    public $timestapms = false;
    public function rule() {
        return $this->hasMany('Rule');
    }
}