<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

/**
 * @covers Mihaeu\Hotshowers\Username
 */
class UsernameTest extends \PHPUnit_Framework_TestCase
{
    public function testHasUserName()
    {
        $username = new Username('test');
        $this->assertEquals('test', $username->username());
    }
}
