<?php

namespace Address;

class City
{
    /** @var string */
    private $city;

    /**
     * @param string $city
     */
    public function __construct($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->city;
    }

}
