<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberCustomList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberCustomList extends AbstractStructBase
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
     * The prefix
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $prefix;
    /**
     * Constructor method for telephonyNumberCustomList
     * @uses TelephonyNumberCustomList::setSession()
     * @uses TelephonyNumberCustomList::setCountry()
     * @uses TelephonyNumberCustomList::setPrefix()
     * @param string $session
     * @param string $country
     * @param string $prefix
     */
    public function __construct($session = null, $country = null, $prefix = null)
    {
        $this
            ->setSession($session)
            ->setCountry($country)
            ->setPrefix($prefix);
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
     * @return \Ovh\StructType\TelephonyNumberCustomList
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
     * @return \Ovh\StructType\TelephonyNumberCustomList
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
     * @return \Ovh\StructType\TelephonyNumberCustomList
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefix, true), gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
        return $this;
    }
}
