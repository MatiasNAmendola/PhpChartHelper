<?php

/*
 * Author: Kevin White
 * Date: 9/4/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 *
 * Only single dimensional arrays are accepted.
 */

class JsPieChartData extends APhpChartData {


protected $values = array();
protected $colors = array();

public function loadValues(array $values) {
	foreach($values as $value) {
		array_push($this->values, $value);
		$this->counter++;
	}
}

public function loadValuesByKey(array $values, $key) {
	foreach($values as $value) {
		array_push($this->values, $value[$key]);
		$this->counter++;
	}
}


public function loadColors(array $colors) {
	foreach($colors as $color) {
		array_push($this->colors, $color[$key]);
	}
}

public function loadColorsByKey(array $colors, $key) {
	foreach($colors as $color) {
		array_push($this->colors, $color[$key]);
	}
}

public function loadArray(array $array, $type = 'values') {
	if($type = 'values') {
		$this->loadValues($array);
	}
	elseif($type = 'colors') {
		$this->loadColors($array);
	}
}

public function loadKeyArray(array $array, $key, $type = 'values') {
	if($type = 'values') {
		$this->loadValuesByKey($array, $key);
	}
	elseif($type = 'colors') {
		$this->loadColorsByKey($array, $key);
	}

}

}

?>
