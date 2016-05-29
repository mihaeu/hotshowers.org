<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

/**
 * @covers Mihaeu\Hotshowers\Email
 */
class EmailTest extends \PHPUnit_Framework_TestCase
{
    public function testHasAddress()
    {
        $email = new Email('test@test.com');
        $this->assertEquals('test@test.com', $email);
    }
}
