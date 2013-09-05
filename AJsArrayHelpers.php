<?php

/*
 * Author: Kevin White
 * Date: 9/3/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 * This is the basest of base classes for the chart helpers.
 * 
 * This is made to load in a random array to create JsChart javascript charts 
 *
 */

abstract class AJsArrayHelpers extends AJsChartHelpers implements IJsChartArrayDataLoader {

protected array $chartdata;
protected $counter = 1;

public function loadData(array $arraydata) {
	$this->chartdata = $arraydata;
}

public function resetCounter() {
	$this->counter = 1;
}

abstract public function renderChart();


}

?>
