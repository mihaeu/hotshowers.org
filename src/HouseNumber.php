<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

class HouseNumber
{
    /** @var string */
    private $number;

    /**
     * @param string $number
     */
    public function __construct(string $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function number() : string
    {
        return $this->number;
    }
}
