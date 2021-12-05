<?php

namespace Daa\Addressable\Bundle\Model\Traits;

/**
 * Trait for implementing Get & Setters for addressable entities.
 */
trait Addressable
{
    /**
     * {@inheritdoc}
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country.
     *
     * @param string $country
     *
     * @return \Daa\Addressable\Bundle\Model\AddressableInterface
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets the postal code aka zip code.
     *
     * @param string $zipCode
     *
     * @return \Daa\Addressable\Bundle\Model\AddressableInterface
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Sets the street number.
     *
     * @param string $streetNumber
     *
     * @return \Daa\Addressable\Bundle\Model\AddressableInterface
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Sets the street name.
     *
     * @param string $streetName
     *
     * @return \Daa\Addressable\Bundle\Model\AddressableInterface
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city.
     *
     * @param string $city
     *
     * @return \Daa\Addressable\Bundle\Model\AddressableInterface
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets the latitude.
     *
     * @param string $latitude
     *
     * @return \Daa\Addressable\Bundle\Model\AddressableInterface
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the longitude.
     *
     * @param string $longitude
     *
     * @return \Daa\Addressable\Bundle\Model\AddressableInterface
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddress()
    {
        return array(
            'country' => $this->getCountry(),
            'zipCode' => $this->getZipCode(),
            'streetNumber' => $this->getStreetNumber(),
            'streetName' => $this->getStreetName(),
            'city' => $this->getCity(),
            'administrativeAreaLevel1' => $this->getAdministrativeAreaLevel1(),
            'administrativeAreaLevel2' => $this->getAdministrativeAreaLevel2(),
            'latitude' => $this->getLatitude(),
            'longitude' => $this->getLongitude(),
        );
    }
    /**
     * Sets all the address fields from an array(
     *       'country' => $this->getCountry(),
     *       'zipCode' => $this->getZipCode(),
     *       'streetNumber' => $this->getStreetNumber(),
     *       'streetName' => $this->getStreetName(),
     *       'administrativeAreaLevel1' => $this->getAdministrativeAreaLevel1(),
     *       'administrativeAreaLevel2' => $this->getAdministrativeAreaLevel2(),
     *       'city' => $this->getCity(),
     *       'latitude' => $this->getLatitude(),
     *       'longitude' => $this->getLongitude()
     *  ).
     *
     * @param array $address
     *
     * @return \Daa\Addressable\Bundle\Model\AddressableInterface
     */
    public function setAddress(array $address)
    {
        $this->setCountry($address['country']);
        $this->setCity($address['city']);
        $this->setZipCode($address['zipCode']);
        $this->setStreetNumber($address['streetNumber']);
        $this->setAdministrativeAreaLevel1($address['administrativeAreaLevel1']);
        $this->setAdministrativeAreaLevel2($address['administrativeAreaLevel2']);
        $this->setStreetName($address['streetName']);
        $this->setLatitude($address['latitude']);
        $this->setLongitude($address['longitude']);
    }

    /**
     * @return mixed
     */
    public function getAdministrativeAreaLevel1()
    {
        return $this->administrativeAreaLevel1;
    }

    /**
     * @param mixed $administrativeAreaLevel1
     */
    public function setAdministrativeAreaLevel1($administrativeAreaLevel1)
    {
        $this->administrativeAreaLevel1 = $administrativeAreaLevel1;
    }

    /**
     * @return mixed
     */
    public function getAdministrativeAreaLevel2()
    {
        return $this->administrativeAreaLevel2;
    }

    /**
     * @param mixed $administrativeAreaLevel2
     */
    public function setAdministrativeAreaLevel2($administrativeAreaLevel2)
    {
        $this->administrativeAreaLevel2 = $administrativeAreaLevel2;
    }
}
