<?php

/*
include '../PHPUnit/Framework/SelfDescribing.php';
include '../PHPUnit/Framework/Test.php';
include '../PHPUnit/Framework/Assert.php';m
include '../PHPUnit/Framework/TestCase.php';
*/

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class First_test extends TestCase
{
	public function testCanBeCreatedFromValidNumbers()
    {
        $this->assertInstanceOf(
            Calculator::class,
            Calculator::add( 23, 28 )
        );
    }
}

$at = new First_test();
$at->testCanBeCreatedFromValidNumbers();
?>
