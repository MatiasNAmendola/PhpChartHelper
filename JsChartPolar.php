<?php

/*
 * Author: Kevin White
 * Date: 9/8/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 * Just got the pie chart working, so now working on tis one.
 *
 */

class JsChartPolar extends AJsChartHelpers {


//in this class this needs to be a JsPieChartData object
private $piechartdata;
public $chart;

public function renderChart() {
if($this->piechartdata != null) {
	$this->chart = $this->getJsChartInit();
	for($i = 0; $i < $this->piechartdata->getCounter(); $i++) {
		if($i > 0) {
			$this->chart = $this->chart . '},{';
		}
		//for some reason I can pass in a literal integer but not a variable integer
		$this->chart = $this->chart . 'value: ' . $this->piechartdata->getValue($i) . ',';
		$this->chart = $this->chart . 'color: "' . $this->piechartdata->getColor($i) . '"';
	}
	$this->chart = $this->chart . '}];';
	$this->chart = $this->chart . 'var ' . $this->chartname . 'newchart  = new Chart(' .$this->chartname.'chart).PolarArea('.$this->chartname.'data);';
	$this->chart = $this->chart . $this->endjstag;
	echo $this->chart;
	}else{	
	echo 'NO CHART DATA LOADED';
 }
}


//need to error handle if the wrong type of data gets passed here
public function setData(AJsBaseChartData $piechartdata) {
	if(get_class($piechartdata) == 'JsPieChartData'){
		$this->piechartdata = $piechartdata;
	}
}



}

?>
