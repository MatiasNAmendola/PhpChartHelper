<?php

/*
 * Author: Kevin White
 * Date: 9/9/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 *
 * 
 */
//namespace PhpChartHelper;
 
interface IJsChartDataWrapper {

public function addDataSet(IJsChartWrappedData $data);

public function setLabel($string);

}

?>