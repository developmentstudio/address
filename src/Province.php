<?php
namespace Address;

class Province
{
    /** @var string */
    private $province;

    /**
     * @param string $province
     */
    public function __construct($province)
    {
        $this->province = $province;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->province;
    }
}
