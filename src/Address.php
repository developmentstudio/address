<?php
namespace Address;

class Address
{
    /** @var Street */
    private $street;
    /** @var ZipCode */
    private $zipCode;
    /** @var City */
    private $city;
    /** @var Province */
    private $province;
    /** @var GPSLocation */
    private $gps;

    /**
     * @return Street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(Street $street)
    {
        $this->street = $street;
    }

    /**
     * @return ZipCode
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param ZipCode $zipCode
     */
    public function setZipCode(ZipCode $zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param City $city
     */
    public function setCity(City $city)
    {
        $this->city = $city;
    }

    /**
     * @return Province
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param Province $province
     */
    public function setProvince(Province $province)
    {
        $this->province = $province;
    }

    /**
     * @return GPSLocation
     */
    public function getGpsLocation()
    {
        return $this->gps;
    }

    /**
     * @param GPSLocation $gps
     */
    public function setGpsLocation(GPSLocation $gps)
    {
        $this->gps = $gps;
    }

}
