<?php 

/**
* 
*/
class Booking extends Eloquent
{
	public $table = 'bookings';

	public function package(){
		return $this->belongsTo('Package','package_id');
	}
}
