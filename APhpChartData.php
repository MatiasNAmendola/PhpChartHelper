<?php

/*
 * Author: Kevin White
 * Date: 9/4/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 *
 */
 
 //namespace PhpChartHelper;

abstract class APhpChartData {

// I like manually counting the number of elements in the values array
protected $counter = 0;

// loads single dimensional array and the type needs to be specified if not going in as values (integers)
public abstract function loadArray(array $settings, $type = 'values');

// loads multi-dimensional array, need to give the key of the array and the type that is being loaded
public abstract function loadKeyArray(array $array, $key, $type = 'values');


public function resetCounter() {
	$this->counter = 0;
}

public function getCounter() {
	return $this->counter;
}

}

?>
