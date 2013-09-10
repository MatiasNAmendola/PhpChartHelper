<?php

/*
 * Author: Kevin White
 * Date: 9/9/2013
 * Creating a package to manage jquery chart.js
 * function names always start lowercase and are then camel cased
 * variable names are going to be all lowercase
 *
 *
 * values and colors are extended from ajsbasechartdata, not sure if they'll be useful in this instance
 */
//namespace PhpChartHelper;
 
class JsSingleBarChartData extends AJsBaseChartData implements IJsChartWrappedData {

protected $label;
// will set these to default values
protected $fillcolor;
protected $strokecolor;

protected $dataset;
//protected $linecount;

public function setLabel($string) {
	$this->label = $string;
}

public function getLabel() {
	return $this->label;
}

public function setFillColor($string) {
	$this->fillcolor = $string;
}

public function getFillColor() {
	return $this->fillcolor;
}

public function setStrokeColor($string) {
	$this->strokecolor = $string;
}

public function getStrokeColor() {
	return $this->strokecolor;
}

public function returnDataSet() {
	$this->dataset = '{fillColor : "' . $this->fillcolor . '",';
	$this->dataset = $this->dataset . 'strokeColor : "' . $this->strokecolor . '",';
	$this->dataset = $this->dataset . 'data : [';
	for($i = 0;$i < $this->counter; $i++) {
		if($i > 0) {
		$this->dataset = $this->dataset . ',';
		}
		$this->dataset = $this->dataset . $this->getValue($i);
	}
	$this->dataset = $this->dataset . ']}';
	return $this->dataset;
}

}

?>