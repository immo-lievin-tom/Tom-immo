<?php

namespace App\Models;

use Core\Model;

class Address extends Model
{

    private $number;
    private $street;
    private $zipcode;
    private $country;
    private $city;

    
    public function __construct()
    {
        $this->set_table('address');
    }

    public function getFieldArray()
    {
        return ['number' =>  $this->getNumber(), 'street' => $this->getStreet(), 'zipcode' => $this->getZipcode(), 'country' => $this->getCountry(), 'city' => $this->getCity()];
    }

    public function getTable()
    {
        return $this->get_table();
    }

    function selectAddress()
    {
        return $this->selectAll();
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of zipcode
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set the value of zipcode
     *
     * @return  self
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }
}
