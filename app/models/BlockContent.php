<?php

class BlockContent extends Eloquent {
//    protected $table = 'ru_blocks';
    private $lang;
    public $timestamps = false;
    public function __construct() {
        $this->lang = App::getLocale();
        $this->table = $this->lang.'_blocks';
    }
}
