<?php declare(strict_types=1);

namespace Mihaeu\Hotshowers;

class PasswordTest extends \PHPUnit_Framework_TestCase
{
    public function testHasPassword()
    {
        $password = new Password('1234');
        $this->assertEquals('1234', $password);
    }
}
