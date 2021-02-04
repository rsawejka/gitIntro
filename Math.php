<?php
/**
 * This class provides some crucial math operations for our application.
 *
 * @author		ACME Development
 * @version		1.0
 */
 
class Math {

	// some useless constants
	public const PI = 3.14;
	public const ZERO = 0;

	/**
	 * Returns the sum of two numbers
	 *
	 * @param float $a
	 * @param float $b
	 * @return float
	 */
	//add numbers
	public static function add($num1, $num2){
		$sum = $num1 + $num2;
		return $sum;
	}
	//divide numbers
	public static function divide($num1, $num2){
		$sum = $num1 / $num2;
		return $sum;
	}
//subtract numbers 
	public static function subtract($num1, $num2){
		$sum = $num1 - $num2;
		return $sum;
	}
//more subtraction
	public static function subtractMore($num1, $num2, $num3) {
		$sum = $num1 - $num2 - $num3;
		return $sum;
	}
	// multiply nuimbers
public static function multiply($num1, $num2){
		$sum = $num1 * $num2;
		return $sum;
	}
	//New Function By Ryan Sanders
public static function newFunction($num1, $num2){
	$sum = $num1 + $num2;
	$average = $sum / 2;
	return $average;
}

//
public static function addTwenty($num1){
	$sum = $num1 + 20;
	return $sum;
}


	
}
