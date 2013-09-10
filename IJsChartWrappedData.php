<?php

/*
 * Author: Kevin White
 * Date: 9/9/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 *
 * This interface is for more complex charts in chartsjs. These charts have multiple datasets sometimes. 
 * these objects need to return their dataset and each dataset will have a label. It's kinda like a decorator pattern
 */
//namespace PhpChartHelper;
 
interface IJsChartWrappedData {

public function returnDataSet();

public function setLabel($string);

public function getLabel();
}

?>