<?php

/**
* 
*/
class PackageCategory extends Eloquent
{
	protected $table = "package_category";


	// PackageCategory has many Package
	// the id of PackageCategory maps with package_category 
	// of Package tabl and we can omit id in this metod
	
	public function packages(){
		return $this->hasMany('Package');
	}

}