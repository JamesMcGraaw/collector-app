<?php

require_once '../functions.php';
require_once '../Archetype.php';

    use PHPUnit\Framework\TestCase;



class populateDropDownArchetypes extends TestCase
{
    public function testpopulateDropDownArchetypesGiven1ReturnsEnchantments()
    {
        $expected = '<option value="1">Enchantments</option>';
        $archetype = new Archetype(1, 'Enchantments');
        $archetypes = [$archetype];
        $result = populateDropDownArchetypes($archetypes);
        $this->assertEquals($expected, $result);
    }

    public function testpopulateDropDownArchetypesGiven28ReturnsLifegain()
    {
        $expected = '<option value="28">Lifegain</option>';
        $archetype = new Archetype(28, 'Lifegain');
        $archetypes = [$archetype];
        $result = populateDropDownArchetypes($archetypes);
        $this->assertEquals($expected, $result);
    }

}
