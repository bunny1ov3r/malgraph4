<?php
abstract class AbstractControllerModule
{
	/**
	* This method contains all code that is executed whenver user visits
	* specific module.
	**/
	public static function work(&$viewContext)
	{
		throw new UnimplementedException();
	}

	/**
	* This method returns what kind of text is allowed within URL to get
	* specific module to run. For example, returning ['list', 'lists'] will
	* trigger this module for example.com/nick/list as well as
	* example.com/nick/lists.
	*/
	public static function getUrlParts()
	{
		throw new UnimplementedException();
	}

	/**
	* This method constructs the URL that is going to be used in layouts,
	* views, etc.
	*/
	public static function url()
	{
		throw new UnimplementedException();
	}
}
