<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class intToBritDate extends TestCase
{
    public function testintBritToDate_GivenTodayIntReturnTodayBrit()
    {
        $expected = '04 Apr 2023';
        $intDate = '2023-04-04';
        $result = intToBritDate($intDate);
        $this->assertEquals($expected, $result);
    }

    public function testintBritToDate_GivenBirthdayIntReturnBirthdayBrit()
    {
        $expected = '03 Nov 1990';
        $intDate = '1990-11-03';
        $result = intToBritDate($intDate);
        $this->assertEquals($expected, $result);
    }

    public function testintBritToDate_GivenNullThrowError()
    {
        $intDate = null;
        $this->expectException(TypeError::class);
        $result = intToBritDate($intDate);
    }
}