<?php

/*
 * Author: Kevin White
 * Date: 9/4/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 * I like knowing how many elements are loaded with the counter
 * Everything will have values in the chart. Will use decorator pattern later. Values can be set to an array of anything
 */
 
 //namespace PhpChartHelper;

abstract class APhpChartData {

// I like manually counting the number of elements in the values array
protected $counter = 0;
protected $values = array();

public function resetCounter() {
	$this->counter = 0;
}

public function getCounter() {
	return $this->counter;
}

public function getValue($int) {
	return $this->values[$int];
}

}

?>
