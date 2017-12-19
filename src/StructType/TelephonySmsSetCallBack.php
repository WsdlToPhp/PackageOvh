<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsSetCallBack StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsSetCallBack extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The smsAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The callBack
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callBack;
    /**
     * Constructor method for telephonySmsSetCallBack
     * @uses TelephonySmsSetCallBack::setSession()
     * @uses TelephonySmsSetCallBack::setSmsAccount()
     * @uses TelephonySmsSetCallBack::setCallBack()
     * @param string $session
     * @param string $smsAccount
     * @param string $callBack
     */
    public function __construct($session = null, $smsAccount = null, $callBack = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setCallBack($callBack);
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
     * @return \PayPal\StructType\TelephonySmsSetCallBack
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
     * Get smsAccount value
     * @return string|null
     */
    public function getSmsAccount()
    {
        return $this->smsAccount;
    }
    /**
     * Set smsAccount value
     * @param string $smsAccount
     * @return \PayPal\StructType\TelephonySmsSetCallBack
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smsAccount)), __LINE__);
        }
        $this->smsAccount = $smsAccount;
        return $this;
    }
    /**
     * Get callBack value
     * @return string|null
     */
    public function getCallBack()
    {
        return $this->callBack;
    }
    /**
     * Set callBack value
     * @param string $callBack
     * @return \PayPal\StructType\TelephonySmsSetCallBack
     */
    public function setCallBack($callBack = null)
    {
        // validation for constraint: string
        if (!is_null($callBack) && !is_string($callBack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callBack)), __LINE__);
        }
        $this->callBack = $callBack;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsSetCallBack
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
