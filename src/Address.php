<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;


class Address
{
    /** @var string */
    private $city;

    /** @var string */
    private $country;

    /** @var int */
    private $zipCode;

    /** @var string */
    private $street;

    /** @var string */
    private $houseNumber;

    /**
     * @param string $city
     * @param string $country
     * @param int $zipCode
     * @param string $street
     * @param string $houseNumber
     */
    public function __construct(
        string $city,
        string $country,
        int $zipCode,
        string $street,
        string $houseNumber
    ) {
        $this->city = $city;
        $this->country = $country;
        $this->zipCode = $zipCode;
        $this->street = $street;
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function city()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function country()
    {
        return $this->country;
    }

    /**
     * @return int
     */
    public function zipCode()
    {
        return $this->zipCode;
    }

    /**
     * @return string
     */
    public function street()
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function houseNumber()
    {
        return $this->houseNumber;
    }
}
