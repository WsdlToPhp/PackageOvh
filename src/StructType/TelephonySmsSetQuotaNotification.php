<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsSetQuotaNotification StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsSetQuotaNotification extends AbstractStructBase
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
     * The login
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $login;
    /**
     * The support
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $support;
    /**
     * The alertNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $alertNumber;
    /**
     * The alertThreshold
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $alertThreshold;
    /**
     * Constructor method for telephonySmsSetQuotaNotification
     * @uses TelephonySmsSetQuotaNotification::setSession()
     * @uses TelephonySmsSetQuotaNotification::setSmsAccount()
     * @uses TelephonySmsSetQuotaNotification::setLogin()
     * @uses TelephonySmsSetQuotaNotification::setSupport()
     * @uses TelephonySmsSetQuotaNotification::setAlertNumber()
     * @uses TelephonySmsSetQuotaNotification::setAlertThreshold()
     * @param string $session
     * @param string $smsAccount
     * @param string $login
     * @param string $support
     * @param string $alertNumber
     * @param string $alertThreshold
     */
    public function __construct($session = null, $smsAccount = null, $login = null, $support = null, $alertNumber = null, $alertThreshold = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setLogin($login)
            ->setSupport($support)
            ->setAlertNumber($alertNumber)
            ->setAlertThreshold($alertThreshold);
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
     * @return \Ovh\StructType\TelephonySmsSetQuotaNotification
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
     * @return \Ovh\StructType\TelephonySmsSetQuotaNotification
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
     * @return \Ovh\StructType\TelephonySmsSetQuotaNotification
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($login)), __LINE__);
        }
        $this->login = $login;
        return $this;
    }
    /**
     * Get support value
     * @return string|null
     */
    public function getSupport()
    {
        return $this->support;
    }
    /**
     * Set support value
     * @param string $support
     * @return \Ovh\StructType\TelephonySmsSetQuotaNotification
     */
    public function setSupport($support = null)
    {
        // validation for constraint: string
        if (!is_null($support) && !is_string($support)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($support)), __LINE__);
        }
        $this->support = $support;
        return $this;
    }
    /**
     * Get alertNumber value
     * @return string|null
     */
    public function getAlertNumber()
    {
        return $this->alertNumber;
    }
    /**
     * Set alertNumber value
     * @param string $alertNumber
     * @return \Ovh\StructType\TelephonySmsSetQuotaNotification
     */
    public function setAlertNumber($alertNumber = null)
    {
        // validation for constraint: string
        if (!is_null($alertNumber) && !is_string($alertNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alertNumber)), __LINE__);
        }
        $this->alertNumber = $alertNumber;
        return $this;
    }
    /**
     * Get alertThreshold value
     * @return string|null
     */
    public function getAlertThreshold()
    {
        return $this->alertThreshold;
    }
    /**
     * Set alertThreshold value
     * @param string $alertThreshold
     * @return \Ovh\StructType\TelephonySmsSetQuotaNotification
     */
    public function setAlertThreshold($alertThreshold = null)
    {
        // validation for constraint: string
        if (!is_null($alertThreshold) && !is_string($alertThreshold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alertThreshold)), __LINE__);
        }
        $this->alertThreshold = $alertThreshold;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsSetQuotaNotification
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
