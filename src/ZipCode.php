<?php
namespace Address;

class ZipCode
{
    /** @var string */
    private $zipCode;

    public function __construct($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    public function __toString()
    {
        return $this->zipCode;
    }

}
