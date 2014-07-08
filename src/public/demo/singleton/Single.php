<?php

class Single
{
	
	private static $instances = null;
	
	private function __construct()
	{
		
	}
	
	public static function getInstance()
	{
		$class = get_called_class();
		
		if(!self::$instances instanceof Single){
			self::$instances[$class] = new $class();
		}
		
		return self::$instances[$class];
	}
	
	private function __clone()
	{
		
	}
}