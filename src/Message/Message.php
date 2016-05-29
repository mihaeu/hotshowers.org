<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers\Message;

class Message
{
    /** @var Subject */
    private $subject;

    /** @var Body */
    private $body;

    /**
     * @param Subject $subject
     * @param Body $body
     */
    public function __construct(Subject $subject, Body $body)
    {
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * @return Subject
     */
    public function subject()
    {
        return $this->subject;
    }

    /**
     * @return Body
     */
    public function body()
    {
        return $this->body;
    }
}
