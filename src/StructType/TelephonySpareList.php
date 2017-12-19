<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareList extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The service
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $service;
    /**
     * Constructor method for telephonySpareList
     * @uses TelephonySpareList::setSession()
     * @uses TelephonySpareList::setType()
     * @uses TelephonySpareList::setService()
     * @param string $session
     * @param string $type
     * @param string $service
     */
    public function __construct($session = null, $type = null, $service = null)
    {
        $this
            ->setSession($session)
            ->setType($type)
            ->setService($service);
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
     * @return \PayPal\StructType\TelephonySpareList
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
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
     * @return \PayPal\StructType\TelephonySpareList
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
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \PayPal\StructType\TelephonySpareList
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySpareList
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
