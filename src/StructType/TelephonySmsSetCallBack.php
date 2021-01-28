<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The smsAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The callBack
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\TelephonySmsSetCallBack
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
     * @return \Ovh\StructType\TelephonySmsSetCallBack
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smsAccount, true), gettype($smsAccount)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsSetCallBack
     */
    public function setCallBack($callBack = null)
    {
        // validation for constraint: string
        if (!is_null($callBack) && !is_string($callBack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callBack, true), gettype($callBack)), __LINE__);
        }
        $this->callBack = $callBack;
        return $this;
    }
}
