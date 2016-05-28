<?php

namespace Mihaeu\Hotshowers;

/**
 * @covers Mihaeu\Hotshowers\User
 *
 * @uses Mihaeu\Hotshowers\Username
 * @uses Mihaeu\Hotshowers\Email
 * @uses Mihaeu\Hotshowers\Address
 * @uses Mihaeu\Hotshowers\Password
 * @uses Mihaeu\Hotshowers\Location
 * @uses Mihaeu\Hotshowers\PhoneNumber
 * @uses Mihaeu\Hotshowers\City
 * @uses Mihaeu\Hotshowers\Country
 * @uses Mihaeu\Hotshowers\HouseNumber
 * @uses Mihaeu\Hotshowers\Street
 * @uses Mihaeu\Hotshowers\ZipCode
 *
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    /** @var User */
    private $user;

    /** @var Address */
    private $address;

    public function setUp()
    {
        $this->address = new Address(
            new City('Testcity'),
            Country::DE(),
            new ZipCode(12345),
            new Street('Test'),
            new HouseNumber('123abc')
        );

        $this->user = new User(
            new Username('Test'),
            new Email('test@test.com'),
            $this->address,
            new Password('1234'),
            new Location(1.23456789, 9.87654321),
            new PhoneNumber('+123456789')
        );
    }
    
    public function testHasUsername()
    {
        $this->assertEquals(new Username('Test'), $this->user->username());
    }
    
    public function testHasEmail()
    {
        $this->assertEquals(new Email('test@test.com'), $this->user->email());
    }
    
    public function testHasAddress()
    {
        $this->assertEquals($this->address, $this->user->address());
    }
    
    public function testHasPassword()
    {
        $this->assertEquals(new Password('1234'), $this->user->password());
    }

    public function testHasLocation()
    {
        $this->assertEquals(new Location(1.23456789, 9.87654321), $this->user->location());
    }

    public function testHasPhoneNumber()
    {
        $this->assertEquals(new PhoneNumber('+123456789'), $this->user->phoneNumber());
    }
}
