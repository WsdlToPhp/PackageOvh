<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberZoneAndPrefixList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberZoneAndPrefixList extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The types
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $types;
    /**
     * Constructor method for telephonyNumberZoneAndPrefixList
     * @uses TelephonyNumberZoneAndPrefixList::setSession()
     * @uses TelephonyNumberZoneAndPrefixList::setCountry()
     * @uses TelephonyNumberZoneAndPrefixList::setTypes()
     * @param string $session
     * @param string $country
     * @param \Ovh\ArrayType\MyArrayOfStringType $types
     */
    public function __construct($session = null, $country = null, \Ovh\ArrayType\MyArrayOfStringType $types = null)
    {
        $this
            ->setSession($session)
            ->setCountry($country)
            ->setTypes($types);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixList
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
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
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixList
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get types value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getTypes()
    {
        return $this->types;
    }
    /**
     * Set types value
     * @param \Ovh\ArrayType\MyArrayOfStringType $types
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixList
     */
    public function setTypes(\Ovh\ArrayType\MyArrayOfStringType $types = null)
    {
        $this->types = $types;
        return $this;
    }
}
