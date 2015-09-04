<?php

class Order extends Eloquent {
    protected $table= 'orders'; 
    public function condition() {
        return $this->belongsTo('Condition');
    }
}

