<?php

/*
 * Author: Kevin White
 * Date: 9/3/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 *
 */
//namespace PhpChartHelper;
 
 
class JsChartPie extends AJsChartHelpers {

/* extended variables
 * chartname, endjstag, jschartinit, enddatatag
 *
 */

//in this class this needs to be a JsPieChartData object
private $chartdata;
public $chart;

//rendering the chart will build the javascript/jquery code and then echo it out. The chart is constructed by already set variables in abstract 
//and extended classes and then string values which would be placed in this file
public function renderChart() {
//gotta make sure the object is set
if($this->chartdata != null) {
	$this->chart = $this->getJsChartInit();
	$this->chart = $this->chart . '[{';
	//should probably use json_encode in the future...
	for($i = 0; $i < $this->chartdata->getCounter(); $i++) {
		if($i > 0) {
			$this->chart = $this->chart . '},{';
		}
		$this->chart = $this->chart . 'value: ' . $this->chartdata->getValue($i) . ',';
		$this->chart = $this->chart . 'color: "' . $this->chartdata->getColor($i) . '"';
	}
	$this->chart = $this->chart . $this->enddatatag;
	$this->chart = $this->chart . 'var ' . $this->chartname . 'newchart  = new Chart(' .$this->chartname.'chart).Pie('.$this->chartname.'data);';
	$this->chart = $this->chart . $this->endjstag;
	echo $this->chart;
	}else{	
	echo 'NO CHART DATA LOADED';
 }
}


//need to error handle if the wrong type of data gets passed here
public function setData(APhpChartData $data) {
	//checks if class is correct for this object
	if(get_class($data) == 'JsPieChartData'){
		$this->chartdata = $data;
	}
}



}

?>
