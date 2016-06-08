<?php

declare (strict_types = 1);

namespace Mihaeu\Hotshowers;

/**
 * @covers Mihaeu\Hotshowers\PhoneNumber
 */
class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
    public function testHasPhoneNumber()
    {
        $phoneNumber = new PhoneNumber('+123456789');
        $this->assertEquals('+123456789', $phoneNumber);
    }
}
