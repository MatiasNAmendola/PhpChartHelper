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

abstract class AJsChartHelpers implements IJsChartHelpers {

protected $chartname;
protected $jschartinit;
protected $canvas;

public function setChartName($chartname) {
	$this->SetJsChartInit($chartname);
	$this->chartname = $chartname;
}

public function getChartName() {
	return $this->chartname;
}

public function setJsChartInit($chartname) {
	$this->jschartinit = 'var $chartname = $("#' . $chartname . '").get(0).getContext("2d");';
}

public function getJsChartInit() {
	return $this->jschartinit;
}

abstract public function renderChart();


}

?>
