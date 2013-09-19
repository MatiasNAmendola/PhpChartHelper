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
//namespace PhpChartHelper;
 
class JsChartDoughnut extends AJsChartHelpers {

/* extended variables
 * chartname, endjstag, jschartinit, enddatatag
 *
 */

//in this class this needs to be a JsDoughnutChartData object
private $chartdata;
public $chart;

public function renderChart() {
//gotta make sure the object is set
if($this->chartdata != null) {
	$this->chart = $this->getJsChartInit();
	$this->chart = $this->chart . '[{';
	//should probably use json_encode in future
	for($i = 0; $i < $this->chartdata->getCounter(); $i++) {
		if($i > 0) {
			$this->chart = $this->chart . '},{';
		}
		$this->chart = $this->chart . 'value: ' . $this->chartdata->getValue($i) . ',';
		$this->chart = $this->chart . 'color: "' . $this->chartdata->getColor($i) . '"';
	}
	$this->chart = $this->chart . $this->enddatatag;
	$this->chart = $this->chart . 'var ' . $this->chartname . 'newchart  = new Chart(' .$this->chartname.'chart).Doughnut('.$this->chartname.'data);';
	$this->chart = $this->chart . $this->endjstag;
	echo $this->chart;
	}else{	
	echo 'NO CHART DATA LOADED';
 }
}


//need to error handle if the wrong type of data gets passed here
public function setData(AJsBaseChartData $chartdata) {
	//I still need to make a PolarChart type, when I get around to enabling defaults to be plugged in for the charts I will do this
	if(get_class($chartdata) == 'JsDoughnutChartData'){
		$this->chartdata = $chartdata;
	}
}



}

?>
