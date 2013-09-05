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

class JsPieChartData extends AJsChartData {


protected array $values;
protected array $colors;

public function loadValues(array $values) {
	$this->values = $values;
	foreach($values as $value) {
		$counter++
	}
}

public function loadColors(array $colors) {
	$this->colors = $colors;
}

public function loadSettings(array $settings, $type = 'values') {
	if($type = 'values') {
		$this->loadValues($settings);
	} else {
		$this->loadValues($colors);
	}		
}


}

?>
