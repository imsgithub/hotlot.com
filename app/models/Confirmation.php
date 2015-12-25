<?php
/**
 *
 */
class Confirmation extends Eloquent
{
    protected $fillable = ['content'];
    public function user(){
      return $this->belongsTo('User');
    }
}
