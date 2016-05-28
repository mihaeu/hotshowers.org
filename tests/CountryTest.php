<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

/**
 * @covers Mihaeu\Hotshowers\Country
 */
class CountryTest extends \PHPUnit_Framework_TestCase
{
    public function testHasCountry()
    {
        $country = Country::DE();
        $this->assertEquals('DE', $country->country());
    }
}
