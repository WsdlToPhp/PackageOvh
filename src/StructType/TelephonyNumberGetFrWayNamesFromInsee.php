<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberGetFrWayNamesFromInsee StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberGetFrWayNamesFromInsee extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The insee
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insee;
    /**
     * The wayName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wayName;
    /**
     * Constructor method for telephonyNumberGetFrWayNamesFromInsee
     * @uses TelephonyNumberGetFrWayNamesFromInsee::setSession()
     * @uses TelephonyNumberGetFrWayNamesFromInsee::setInsee()
     * @uses TelephonyNumberGetFrWayNamesFromInsee::setWayName()
     * @param string $session
     * @param string $insee
     * @param string $wayName
     */
    public function __construct($session = null, $insee = null, $wayName = null)
    {
        $this
            ->setSession($session)
            ->setInsee($insee)
            ->setWayName($wayName);
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
     * @return \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInsee
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
     * @return \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInsee
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
     * Get wayName value
     * @return string|null
     */
    public function getWayName()
    {
        return $this->wayName;
    }
    /**
     * Set wayName value
     * @param string $wayName
     * @return \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInsee
     */
    public function setWayName($wayName = null)
    {
        // validation for constraint: string
        if (!is_null($wayName) && !is_string($wayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wayName)), __LINE__);
        }
        $this->wayName = $wayName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInsee
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
