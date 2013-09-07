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

public abstract function loadSettings(array $settings, $type = 'values');


public function resetCounter() {
	$this->counter = 1;
}

}

?>
