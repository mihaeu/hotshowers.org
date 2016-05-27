<?php

namespace Mihaeu\Hotshowers;

class User
{
    private $username;
    private $email;
    private $address;
    private $password;
    private $location;
    private $phoneNumber;

    /**
     * @param Username $username
     * @param Email $email
     * @param Address $address
     * @param Password $password
     * @param Location $location
     * @param PhoneNumber $phoneNumber
     */
    public function __construct(
        Username $username,
        Email $email,
        Address $address,
        Password $password,
        Location $location,
        PhoneNumber $phoneNumber
    ) {
        $this->username = $username;
        $this->email = $email;
        $this->address = $address;
        $this->password = $password;
        $this->location = $location;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return Username
     */
    public function username()
    {
        return $this->username;
    }

    /**
     * @return Email
     */
    public function email()
    {
        return $this->email;
    }

    /**
     * @return Address
     */
    public function address()
    {
        return $this->address;
    }

    /**
     * @return Password
     */
    public function password()
    {
        return $this->password;
    }

    /**
     * @return Location
     */
    public function location()
    {
        return $this->location;
    }

    /**
     * @return PhoneNumber
     */
    public function phoneNumber()
    {
        return $this->phoneNumber;
    }
}
