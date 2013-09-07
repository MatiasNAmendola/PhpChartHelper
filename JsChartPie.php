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

class JsChartPie extends AJsChartHelpers {


//in this class this needs to be a JsPieChartData object
private $piechartdata;

public function renderChart() {
	echo 'testing pie chart';
}


//need to error handle if the wrong type of data gets passed here
public function setData(AJsBaseChartData $piechartdata) {
	if(get_class($piechartdata) == 'JsPieChartData'){
		$this->piechartdata = $data;
	}
}


}

?>
