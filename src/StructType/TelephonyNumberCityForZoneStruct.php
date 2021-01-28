<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberCityForZoneStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberCityForZoneStruct extends AbstractStructBase
{
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The postalCode
     * @var string
     */
    public $postalCode;
    /**
     * Constructor method for telephonyNumberCityForZoneStruct
     * @uses TelephonyNumberCityForZoneStruct::setCity()
     * @uses TelephonyNumberCityForZoneStruct::setPostalCode()
     * @param string $city
     * @param string $postalCode
     */
    public function __construct($city = null, $postalCode = null)
    {
        $this
            ->setCity($city)
            ->setPostalCode($postalCode);
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
     * @return \Ovh\StructType\TelephonyNumberCityForZoneStruct
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Ovh\StructType\TelephonyNumberCityForZoneStruct
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        return $this;
    }
}
