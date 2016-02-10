<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ContentPage extends Eloquent {

    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
    protected $softDelete = true;

    protected $table;
    public $timestamps = true;

    public function __construct() {
        $this->table = 'content_pages';
    }
}
