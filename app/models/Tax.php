<?php
class Tax extends Eloquent
{
    protected $table = 'taxes';
    public $timestamps = false;
    protected $fillable = ['content'];
}
