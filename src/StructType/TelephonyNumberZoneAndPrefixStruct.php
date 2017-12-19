<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberZoneAndPrefixStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberZoneAndPrefixStruct extends AbstractStructBase
{
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The zone
     * @var string
     */
    public $zone;
    /**
     * The prefix
     * @var string
     */
    public $prefix;
    /**
     * Constructor method for telephonyNumberZoneAndPrefixStruct
     * @uses TelephonyNumberZoneAndPrefixStruct::setCountry()
     * @uses TelephonyNumberZoneAndPrefixStruct::setType()
     * @uses TelephonyNumberZoneAndPrefixStruct::setZone()
     * @uses TelephonyNumberZoneAndPrefixStruct::setPrefix()
     * @param string $country
     * @param string $type
     * @param string $zone
     * @param string $prefix
     */
    public function __construct($country = null, $type = null, $zone = null, $prefix = null)
    {
        $this
            ->setCountry($country)
            ->setType($type)
            ->setZone($zone)
            ->setPrefix($prefix);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixStruct
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get zone value
     * @return string|null
     */
    public function getZone()
    {
        return $this->zone;
    }
    /**
     * Set zone value
     * @param string $zone
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixStruct
     */
    public function setZone($zone = null)
    {
        // validation for constraint: string
        if (!is_null($zone) && !is_string($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zone)), __LINE__);
        }
        $this->zone = $zone;
        return $this;
    }
    /**
     * Get prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Set prefix value
     * @param string $prefix
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixStruct
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixStruct
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
