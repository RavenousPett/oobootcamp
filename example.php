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
echo Math::add(1,2,3);