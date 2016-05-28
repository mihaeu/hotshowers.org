<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

class Password
{
    /** @var string */
    private $password;

    /**
     * @param string $password
     */
    public function __construct(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function password() : string
    {
        return $this->password;
    }
}
