<?php

require_once '../functions.php';
require_once '../Colourid.php';

    use PHPUnit\Framework\TestCase;



class populateDropDownColourID extends TestCase
{
    public function testpopulateDropDownColourIDgiven1returnsMonoWhite()
    {
        $expected = '<option value="1">Mono White</option>';
        $colourID = new ColourID(1, 'Mono White');
        $colourIDs = [$colourID];
        $result = populateDropDownColourID($colourIDs);
        $this->assertEquals($expected, $result);
    }

    public function testpopulateDropDownColourIDgiven32returns5colour()
    {
        $expected = '<option value="32">5 Colour</option>';
        $colourID = new ColourID(32, '5 Colour');
        $colourIDs = [$colourID];
        $result = populateDropDownColourID($colourIDs);
        $this->assertEquals($expected, $result);
    }
}
