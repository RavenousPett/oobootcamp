<?php

namespace Acme;

class Math{

	// Static methods are namespaced but globably available.
	// This method is acceptable as a static because it does not manipulate, effect or call the outside world.
	// Another good example would be some sort of basci string function.
	public static function add(){

		// ...numbs takes the arguments and puts them in an array
		// return the sum of the $nums
		return array_sum(func_get_args());

	}

}