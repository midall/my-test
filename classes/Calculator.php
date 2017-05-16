<?php
declare(strict_types=1);

//namespace mytest;


class Calculator
{
	private $a;
	private $b;
	
	/**
	 * Constructor
	 * 
	 * @param number $a
	 * @param number $b
	 */
	function __construct( $a, $b )
	{
		$this->a = $a;
		$this->b = $b;
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
	 * @return number
	 */
	function add()
	{
		return $this->a + $this->b;
	}
	
	/**
	 * Calculates the difference between two numbers
	 * 
	 * @return number
	 */
	function subtraction()
	{
		return $this->a - $this->b;
	}
	
	/**
	 * Multiplying two numbers
	 * 
	 * @return number
	 */
	function multiplication()
	{
		$result = $this->a * $this->b;
		return $result;
	}
	
	/**
	 * Dividing one number from another
	 * 
	 * @return number
	 */
	function division()
	{
		if( $this->b != 0 && $this->b != NULL )
		{
			return $this->a / $this->b;
		}
		else
		{
			return NULL;
		}
	}
}