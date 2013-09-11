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
 //namespace PhpChartHelper;


//Getting all html and javascript redundancy out of the way
abstract class APhpChartHelpers implements IPhpChartHelper {

//every chart can have a name
protected $chartname;

//pretty sure every chart is going to be using javascript, should probably include a beginning js string too...
protected $endjstag = '</script>';

//Setting chart name also sets up the beginning chart javscript tag, this method will often be overridden.
public function setChartName($chartname) {
	$this->chartname = $chartname;
}

public function getChartName() {
	return $this->chartname;
}

//All chart classes will render a chart
abstract public function renderChart();

abstract public function setData(APhpChartData $data);
}



?>
