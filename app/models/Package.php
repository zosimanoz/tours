<?php




class Package extends Eloquent
{

	// while showing relationship
	// Package belongs to PackageCategory and
	// We connect them with a column of Package package_category
	// package_category maps with id of the other table

	 
	public function category(){
		return $this->belongsTo('PackageCategory','package_category');
	}


	// id maps with package_id in booking table
	public function booking(){
		return $this->hasMany('Booking');
	}

}