<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

/**
 * @covers Mihaeu\Hotshowers\Address
 */
class AddressTest extends \PHPUnit_Framework_TestCase
{
    /** @var Address */
    private $address;

    public function setUp()
    {
        $this->address = new Address(
            'Testcity',
            'Testcountry',
            12345,
            'Teststreet',
            '123abc'
        );
    }

    public function testHasCity()
    {
        $this->assertEquals('Testcity', $this->address->city());
    }

    public function testHasCountry()
    {
        $this->assertEquals('Testcountry', $this->address->country());
    }

    public function testHasZipCode()
    {
        $this->assertEquals(12345, $this->address->zipCode());
    }

    public function testHasStreet()
    {
        $this->assertEquals('Teststreet', $this->address->street());
    }

    public function testHasHouseNumber()
    {
        $this->assertEquals('123abc', $this->address->houseNumber());
    }
}
