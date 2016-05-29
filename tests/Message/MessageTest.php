<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers\Message;

/**
 * @covers Mihaeu\Hotshowers\Message\Message
 *
 * @uses Mihaeu\Hotshowers\Message\Subject
 * @uses Mihaeu\Hotshowers\Message\Body
 */
class MessageTest extends \PHPUnit_Framework_TestCase
{
    public function testHasSubject()
    {
        $this->assertEquals(new Subject('subject'), (new Message(new Subject('subject'), new Body('body')))->subject());
    }

    public function testHasBody()
    {
        $this->assertEquals(new Body('body'), (new Message(new Subject('subject'), new Body('body')))->body());
    }
}
