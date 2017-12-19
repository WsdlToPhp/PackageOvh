<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyCitiesFromZipStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyCitiesFromZipStruct extends AbstractStructBase
{
    /**
     * The insee
     * @var string
     */
    public $insee;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The zip
     * @var string
     */
    public $zip;
    /**
     * The zne
     * @var string
     */
    public $zne;
    /**
     * Constructor method for telephonyCitiesFromZipStruct
     * @uses TelephonyCitiesFromZipStruct::setInsee()
     * @uses TelephonyCitiesFromZipStruct::setCity()
     * @uses TelephonyCitiesFromZipStruct::setZip()
     * @uses TelephonyCitiesFromZipStruct::setZne()
     * @param string $insee
     * @param string $city
     * @param string $zip
     * @param string $zne
     */
    public function __construct($insee = null, $city = null, $zip = null, $zne = null)
    {
        $this
            ->setInsee($insee)
            ->setCity($city)
            ->setZip($zip)
            ->setZne($zne);
    }
    /**
     * Get insee value
     * @return string|null
     */
    public function getInsee()
    {
        return $this->insee;
    }
    /**
     * Set insee value
     * @param string $insee
     * @return \PayPal\StructType\TelephonyCitiesFromZipStruct
     */
    public function setInsee($insee = null)
    {
        // validation for constraint: string
        if (!is_null($insee) && !is_string($insee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insee)), __LINE__);
        }
        $this->insee = $insee;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \PayPal\StructType\TelephonyCitiesFromZipStruct
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param string $zip
     * @return \PayPal\StructType\TelephonyCitiesFromZipStruct
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zip)), __LINE__);
        }
        $this->zip = $zip;
        return $this;
    }
    /**
     * Get zne value
     * @return string|null
     */
    public function getZne()
    {
        return $this->zne;
    }
    /**
     * Set zne value
     * @param string $zne
     * @return \PayPal\StructType\TelephonyCitiesFromZipStruct
     */
    public function setZne($zne = null)
    {
        // validation for constraint: string
        if (!is_null($zne) && !is_string($zne)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zne)), __LINE__);
        }
        $this->zne = $zne;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyCitiesFromZipStruct
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
