<?php

class Set extends \Eloquent {
	protected $fillable = ['user_id','title','description','views'];

  public function cards()
  {
    return $this->hasMany('Card');
  }

  public function user()
  {
    return $this->belongsTo('User');
  }
}