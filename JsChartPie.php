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

class JsChartPie extends AJsArrayHelpers {

protected $piechartdata = array();

abstract public function renderChart();

public function loadSingleData($value, $color) {
	$piechartdata[$counter, 'value'] = $value;
	$piechartdata[$counter, 'color'] = $color;
	$counter++
}
}

?>
