<?php
namespace mytest;

class Calculator
{
	/**
	 * Constructor
	 */
	function __construct()
	{
		
	}
	
	/**
	 * Destructor
	 */
	function __destruct()
	{
		
	}
	
	/**
	 * Calculate the sum of two numbers
	 * 
	 * @param number $a
	 * @param number $b
	 * @return number
	 */
	function add( $a, $b )
	{
		return $a + $b;
	}
	
	/**
	 * Calculates the difference between two numbers
	 * 
	 * @param number $a
	 * @param number $b
	 * @return number
	 */
	function subtraction( $a, $b )
	{
		return $a - $b;
	}
	
	/**
	 * Multiplying two numbers
	 * 
	 * @param number $a
	 * @param number $b
	 * @return number
	 */
	function multiplication( $a, $b )
	{
		return $a * $b;
	}
	
	/**
	 * Dividing one number from another
	 * 
	 * @param number $a
	 * @param number $b
	 * @return number
	 */
	function division( $a, $b )
	{
		if( $b != 0 )
		{
			return $a / $b;
		}
		else
		{
			return NULL;
		}
	}
}