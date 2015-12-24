<?php

class ContractType extends Eloquent {
    protected $table = 'contract_types';
    public $timestamps = false;
    public function form(){
      return $this->hasMany('DeliveryForm');
    }
}
