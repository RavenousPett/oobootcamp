<?php

use Acme\Users\Human;
use Acme\Staff;
use Acme\Business;
use Acme\Math;

$jeff = new Human('Jeffery Way');
$jane = new Human('Jane Doyle');

// Add jefferey way to staff
$staff = new Staff([$jeff]);

// create the laracasts business object, passing in staff.
$laracasts = new Business($staff);

// The business should be able to add humans to thier staff
$laracasts->hire($jane);

// create a getter to obtain the staff in the business
// var_dump($laracasts->getStaff());

// $math = new Math;
// var_dump((new Math)->add(1,2,3,4));
// echo Math::add(1,2,3);

// Using and interface and abstract class together

// If you find yourself checking the type of an object procede, you might want to think about leveraging polymorphism, which I think
// interface is a part of.
// An interface defines the contract for a concreate implementation of a class, it defines a public api
// An interface can only define public methods which will be avialbe of the concreat implementation.
// There is never any logic stored within an interface, this makes it cheap to use
// We can implement multiple interfaces
interface Provider{
	public function getAuthorisationUrl();
}

// An abstract class can not be instansiated on its own, we must create as sub class and leverage inheritance
// You can use this to create abstract protected methods
// PHP does not support multiple inheritance
class AbstractProvider{

	// We can put common code for sub classes in our base abstract class

	// By using an abstract method we are saying that we require and mandate the a sub class creates and implements this method
	// abstract protected function getAuthorisationUrl();

	protected function related(){
		echo 'ran the related function';
		return $this;
	}

}


// You could define your contract in the interface, but then as you build say a TwitterProvider you may find that there is
// related functionaliy between the two which we do not want to repeat so would could use inheritance, and place the similar
// logic in the base class. Or we could extract a class and use depancy injection.
class FacebookProvider extends AbstractProvider{

	public function getAuthorisationUrl(){
		// Each sub class must give us their version of this logic
		echo 'fbaurthurl  ';
		return $this;
	}

	public function returnRelated(){
		$this->related();
	}

}

$FacebookProvider = new FacebookProvider;

$FacebookProvider->getAuthorisationUrl()->returnRelated();