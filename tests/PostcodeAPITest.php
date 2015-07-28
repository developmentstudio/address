<?php

use Address\PostcodeAPI;

class PostcodeAPITest extends PHPUnit_Framework_TestCase
{
    public function testGetAddressByZipCodeAndNumber()
    {
        $address = PostcodeAPI::getAddressByZipCodeAndNumber("4205AZ", "1");

        $street = $address->getStreet();
        $zipCode = $address->getZipCode();
        $city = $address->getCity();
        $province = $address->getProvince();
        $gps = $address->getGpsLocation();

        $this->assertSame("Stadhuisplein 1", $street->__toString());
        $this->assertSame("Stadhuisplein", $street->getName());
        $this->assertSame(1, $street->getNumber());
        $this->assertSame("4205AZ", $zipCode->__toString());
        $this->assertSame("Gorinchem", $city->__toString());
        $this->assertSame("Zuid-Holland", $province->__toString());
        $this->assertSame("51.8323,4.96453", $gps->__toString());
        $this->assertSame(51.8323, $gps->getLatitude());
        $this->assertSame(4.96453, $gps->getLongitude());
    }
}
