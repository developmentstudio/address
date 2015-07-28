<?php
namespace Address;

class Street
{
    /** @var string */
    private $name;
    /**
     * @var int
     */
    private $number;

    /**
     * @param string $street
     * @param int $number
     */
    public function __construct($name, $number)
    {
        $this->setName($name);
        $this->setNumber($number);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "$this->name $this->number";
    }
}
