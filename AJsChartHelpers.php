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
abstract class AJsChartHelpers implements IJsChartHelpers {

protected $chartname;
//every chart starts this way in Chart.js
protected $jschartinit;

protected $enddatatag = '}]';
protected $endjstag = '</script>';

//Setting chart name also sets up the beginning chart tag
public function setChartName($chartname) {
	$this->setJsChartInit($chartname);
	$this->chartname = $chartname;
}

public function getChartName() {
	return $this->chartname;
}

//dynamic tags in case you want more than one chart
public function setJsChartInit($chartname) {
	$this->jschartinit = '<script type="text/javascript"> var ' . $chartname . 'chart = $("#' . $chartname . '").get(0).getContext("2d"); var ' . $this->getChartName() . 'data = [{';
}

public function getJsChartInit() {
	return $this->jschartinit;
}

abstract public function renderChart();

}



?>
