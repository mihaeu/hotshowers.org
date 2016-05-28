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
     * @param City $city
     * @param Country $country
     * @param ZipCode $zipCode
     * @param Street $street
     * @param HouseNumber $houseNumber
     */
    public function __construct(
        City $city,
        Country $country,
        ZipCode $zipCode,
        Street $street,
        HouseNumber $houseNumber
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
    public function city() : City
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function country() : Country
    {
        return $this->country;
    }

    /**
     * @return int
     */
    public function zipCode() : ZipCode
    {
        return $this->zipCode;
    }

    /**
     * @return string
     */
    public function street() : Street
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function houseNumber() : HouseNumber
    {
        return $this->houseNumber;
    }
}
