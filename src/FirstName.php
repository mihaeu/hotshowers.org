<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

class FirstName
{
    /** @var string */
    private $firstName;

    /**
     * @param string $firstName
     */
    public function __construct(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function firstName() : string
    {
        return $this->firstName;
    }
}
