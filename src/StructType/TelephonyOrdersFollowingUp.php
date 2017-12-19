<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyOrdersFollowingUp StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyOrdersFollowingUp extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The isOrderDone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $isOrderDone;
    /**
     * Constructor method for telephonyOrdersFollowingUp
     * @uses TelephonyOrdersFollowingUp::setSession()
     * @uses TelephonyOrdersFollowingUp::setIsOrderDone()
     * @param string $session
     * @param bool $isOrderDone
     */
    public function __construct($session = null, $isOrderDone = null)
    {
        $this
            ->setSession($session)
            ->setIsOrderDone($isOrderDone);
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
     * @return \Ovh\StructType\TelephonyOrdersFollowingUp
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
     * Get isOrderDone value
     * @return bool|null
     */
    public function getIsOrderDone()
    {
        return $this->isOrderDone;
    }
    /**
     * Set isOrderDone value
     * @param bool $isOrderDone
     * @return \Ovh\StructType\TelephonyOrdersFollowingUp
     */
    public function setIsOrderDone($isOrderDone = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOrderDone) && !is_bool($isOrderDone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOrderDone)), __LINE__);
        }
        $this->isOrderDone = $isOrderDone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyOrdersFollowingUp
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
