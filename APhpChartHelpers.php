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


//Getting all html and javascript redundancy out of the way
abstract class APhpChartHelpers implements IPhpChartHelper {

protected $chartname;

protected $endjstag = '</script>';

//Setting chart name also sets up the beginning chart tag
public function setChartName($chartname) {
	$this->chartname = $chartname;
}

public function getChartName() {
	return $this->chartname;
}

abstract public function renderChart();

}



?>
