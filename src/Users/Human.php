<?php

namespace Acme\Users;

class Human{

	protected $name;

	// Example of a bad use of a static. This property will be shared between each instance of a person. So everytime any person has
	// a birthday the age will go up, which is obviouly wrong.
	public static $age; 

	public function __construct($name){

		$this->name = $name;

	}

	public function haveBirthday(){

		static::$age ++;

	}

}