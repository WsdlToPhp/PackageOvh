<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserSetCallBack StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserSetCallBack extends AbstractStructBase
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
     * The login
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $login;
    /**
     * The callBack
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callBack;
    /**
     * Constructor method for telephonySmsUserSetCallBack
     * @uses TelephonySmsUserSetCallBack::setSession()
     * @uses TelephonySmsUserSetCallBack::setSmsAccount()
     * @uses TelephonySmsUserSetCallBack::setLogin()
     * @uses TelephonySmsUserSetCallBack::setCallBack()
     * @param string $session
     * @param string $smsAccount
     * @param string $login
     * @param string $callBack
     */
    public function __construct($session = null, $smsAccount = null, $login = null, $callBack = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setLogin($login)
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
     * @return \Ovh\StructType\TelephonySmsUserSetCallBack
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
     * @return \Ovh\StructType\TelephonySmsUserSetCallBack
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
     * Get login value
     * @return string|null
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Set login value
     * @param string $login
     * @return \Ovh\StructType\TelephonySmsUserSetCallBack
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->login = $login;
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
     * @return \Ovh\StructType\TelephonySmsUserSetCallBack
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
