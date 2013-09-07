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

abstract class APhpChartData {

protected $counter = 1;

public abstract function loadArray(array $settings, $type = 'values');

public abstract function loadKeyArray(array $array, $key, $type = 'values');


public function resetCounter() {
	$this->counter = 1;
}

public function getCounter() {
	return $this->counter;
}

}

?>
