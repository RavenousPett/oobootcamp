<?php

namespace Acme;

use Acme\Users\Human;

class Business{

	protected $staff;

	// You can't create a business without staff, so make it a requirement. And also type hint it as Staff.
	public function __construct(Staff $staff){

		$this->staff = $staff;

	}

	public function getStaff(){

		// Send a get message to the Staff object
		return $this->staff->getMembers();

	}

	public function hire(Human $human){

		// Send a message of add to the Staff object
		$this->staff->add($human);

	}

}