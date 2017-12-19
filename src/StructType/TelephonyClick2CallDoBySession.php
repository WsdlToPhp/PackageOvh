<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyClick2CallDoBySession StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyClick2CallDoBySession extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The calling
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $calling;
    /**
     * The called
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $called;
    /**
     * The billingNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingNumber;
    /**
     * Constructor method for telephonyClick2CallDoBySession
     * @uses TelephonyClick2CallDoBySession::setSession()
     * @uses TelephonyClick2CallDoBySession::setCalling()
     * @uses TelephonyClick2CallDoBySession::setCalled()
     * @uses TelephonyClick2CallDoBySession::setBillingNumber()
     * @param string $session
     * @param string $calling
     * @param string $called
     * @param string $billingNumber
     */
    public function __construct($session = null, $calling = null, $called = null, $billingNumber = null)
    {
        $this
            ->setSession($session)
            ->setCalling($calling)
            ->setCalled($called)
            ->setBillingNumber($billingNumber);
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
     * @return \Ovh\StructType\TelephonyClick2CallDoBySession
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
     * Get calling value
     * @return string|null
     */
    public function getCalling()
    {
        return $this->calling;
    }
    /**
     * Set calling value
     * @param string $calling
     * @return \Ovh\StructType\TelephonyClick2CallDoBySession
     */
    public function setCalling($calling = null)
    {
        // validation for constraint: string
        if (!is_null($calling) && !is_string($calling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calling)), __LINE__);
        }
        $this->calling = $calling;
        return $this;
    }
    /**
     * Get called value
     * @return string|null
     */
    public function getCalled()
    {
        return $this->called;
    }
    /**
     * Set called value
     * @param string $called
     * @return \Ovh\StructType\TelephonyClick2CallDoBySession
     */
    public function setCalled($called = null)
    {
        // validation for constraint: string
        if (!is_null($called) && !is_string($called)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($called)), __LINE__);
        }
        $this->called = $called;
        return $this;
    }
    /**
     * Get billingNumber value
     * @return string|null
     */
    public function getBillingNumber()
    {
        return $this->billingNumber;
    }
    /**
     * Set billingNumber value
     * @param string $billingNumber
     * @return \Ovh\StructType\TelephonyClick2CallDoBySession
     */
    public function setBillingNumber($billingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($billingNumber) && !is_string($billingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingNumber)), __LINE__);
        }
        $this->billingNumber = $billingNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyClick2CallDoBySession
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
