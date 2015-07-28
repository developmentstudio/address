<?php
namespace Address;

class GPSLocation
{
    /** @var float */
    private $latitude;
    /** @var float */
    private $longitude;

    public function __construct($latitude, $longitude)
    {
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "$this->latitude,$this->longitude";
    }
}
