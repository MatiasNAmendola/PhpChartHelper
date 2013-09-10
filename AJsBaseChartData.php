<?php

/*
 * Author: Kevin White
 * Date: 9/6/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 *
 */
 
 //namespace PhpChartHelper;


abstract class AJsBaseChartData extends APhpChartData {

//All chartjs objects have values and colors. Colors array may be used differently per class
protected $values = array();
protected $colors = array();

//loads a single dimensional array as values array
public function loadValues(array $values) {
	foreach($values as $value) {
		array_push($this->values, $value);
		$this->counter++;
	}
}

//loads a multidimensinoal array. must provide key
public function loadValuesByKey(array $values, $key) {
	foreach($values as $value) {
		array_push($this->values, $value[$key]);
		$this->counter++;
	}
}

//loads a single dimensional array as colors array
public function loadColors(array $colors) {
	foreach($colors as $color) {
		array_push($this->colors, $color);
	}
}

//loads a multidimensional array. must provide key
public function loadColorsByKey(array $colors, $key) {
	foreach($colors as $color) {
		array_push($this->colors, $color[$key]);
	}
}

//public method for loading (thinking about making other methods protected) must provide what type you are loading.
public function loadArray(array $array, $type = 'values') {
	if($type == 'values') {
		$this->loadValues($array);
	}
	elseif($type == 'colors') {
		$this->loadColors($array);
	}
}

//public method for loading must provide type and key value
public function loadKeyArray(array $array, $key, $type = 'values') {
	if($type == 'values') {
		$this->loadValuesByKey($array, $key);
	}
	elseif($type == 'colors') {
		$this->loadColorsByKey($array, $key);
	}

}

//method for returning the index $int of the colors array
public function getColor($int) {
	return $this->colors[$int];
}

}

?>
