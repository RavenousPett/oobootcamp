<?php

namespace Acme;

use Acme\Users\Human;

class Staff{

	protected $members;

	// Allow the option to pass in members, or default to an array
	public function __construct($members = []){

		$this->members = $members;

	}

	public function getMembers(){

		return $this->members;

	}

	public function add(Human $human){

		$this->members[] = $human;

	}

}