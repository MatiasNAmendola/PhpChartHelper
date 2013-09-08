<?php

/*
 * Author: Kevin White
 * Date: 9/3/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 * 
 * Each and every chart object will have a name and the ability to render a chart's code regardless of anything else
 */
//namespace PhpChartHelper;
 
interface IPhpChartHelper {

//all charts have names
public function setChartName($chartname);

public function getChartName();

//all charts need to be rendered
public function renderChart();

}

?>
