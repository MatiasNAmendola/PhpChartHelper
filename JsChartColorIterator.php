<?php

/*
 * Author: Kevin White
 * Date: 9/4/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 *
 */
//namespace PhpChartHelper;
 
//use this in all charts with colors non-specified
class JsChartColorIterator {

public $colors = array("red","blue","yellow","green","pink","orange","black","white");

// these will be the default colors
public static function getColors() {
	$colors = array("red","blue","yellow","green","pink","orange","black","white");
	return $colors;
}
}

?>
