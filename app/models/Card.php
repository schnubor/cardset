<?php

class Card extends \Eloquent {
	protected $fillable = ['user_id','set_id','title','front','back','views'];
}