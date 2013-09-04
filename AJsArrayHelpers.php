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
 */

abstract class AJsArrayHelpers extends AJsChartHelpers implements IJsChartArrayDataLoader {

protected array $chartdata;

public function loadData(array $arraydata) {
	$this->$chartdata = $arraydata;
}

abstract public function renderChart();


}

?>
