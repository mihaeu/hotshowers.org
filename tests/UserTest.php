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
 * 
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    /** @var User */
    private $user;

    public function setUp()
    {
        $this->user = new User(
            new Username('Test'),
            new Email('test@test.com'),
            new Address(
                'Testcity',
                'Testcountry',
                12345,
                'Teststreet',
                '123abc'
            ),
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
        $this->assertEquals(new Address(
            'Testcity',
            'Testcountry',
            12345,
            'Teststreet',
            '123abc'
        ), $this->user->address());
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
