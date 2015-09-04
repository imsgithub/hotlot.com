<?php

class Block extends Eloquent {
    protected $table = 'blocks';
    public $timestamps = false;
    public function content() {
        return $this->hasOne('BlockContent');
    }
}