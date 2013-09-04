<?php

/*
 * Author: Kevin White
 * Date: 9/3/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 * 
 */

public interface IJsChartHelpers{

public function setChartName(string $chartname);

public function getChartName();

public function renderChart();

}

?>
