<?php

/**
* 
*/
class Page extends Eloquent
{

	protected $pages;

	public static function findBySlug(Page $page)
	{
		return Page::whereSlug($page);
	}
	
}