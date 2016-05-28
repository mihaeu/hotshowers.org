<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

class ZipCode
{
    /** @var int */
    private $zipCode;

    /**
     * @param int $zipCode
     */
    public function __construct(int $zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return int
     */
    public function zipCode() : int
    {
        return $this->zipCode;
    }
}
