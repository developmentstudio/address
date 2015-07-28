<?php
namespace Address;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class PostcodeAPI
{
    private static $baseUrl = "https://api.postcodeapi.nu/";

    /**
     * @param string $zipCode
     * @param string $number
     * @param string $apiKey
     * @return Address
     * @throws \Exception
     */
    public static function getAddressByZipCodeAndNumber($zipCode, $number, $apiKey = null)
    {
        if (!isset($apiKey)) {
            $apiKey = self::getGlobalApiKey();
        }

        try {
            $client = new Client(['headers' => ['Api-Key' => $apiKey]]);
            $response = $client->get(self::$baseUrl . $zipCode . '/' . $number);
            $content = json_decode($response->getBody()->getContents(), true);

            $r = $content['resource'];

            $address = new Address();
            $address->setStreet(new Street($r['street'], $r['house_number']));
            $address->setZipCode(new ZipCode($r['postcode']));
            $address->setCity(new City($r['town']));
            $address->setProvince(new Province($r['province']));
            $address->setGpsLocation(new GPSLocation($r['latitude'], $r['longitude']));
            return $address;
        } catch (ClientException $e) {
            // TODO: Handling exceptions.
            throw new \Exception("An error occurred during requesting postcode API.");
        }
    }

    /**
     * @return string
     * @throws \Exception
     */
    private static function getGlobalApiKey()
    {
        if (defined("POSTCODE_API_KEY")) {
            return POSTCODE_API_KEY;
        } else {
            throw new \Exception("API Key for " . self::$baseUrl . " is not defined.");
        }
    }
}
