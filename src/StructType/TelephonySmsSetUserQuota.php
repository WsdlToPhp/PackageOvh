<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsSetUserQuota StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsSetUserQuota extends AbstractStructBase
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
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The quotaDiff
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $quotaDiff;
    /**
     * Constructor method for telephonySmsSetUserQuota
     * @uses TelephonySmsSetUserQuota::setSession()
     * @uses TelephonySmsSetUserQuota::setSmsAccount()
     * @uses TelephonySmsSetUserQuota::setLogin()
     * @uses TelephonySmsSetUserQuota::setStatus()
     * @uses TelephonySmsSetUserQuota::setQuotaDiff()
     * @param string $session
     * @param string $smsAccount
     * @param string $login
     * @param string $status
     * @param string $quotaDiff
     */
    public function __construct($session = null, $smsAccount = null, $login = null, $status = null, $quotaDiff = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setLogin($login)
            ->setStatus($status)
            ->setQuotaDiff($quotaDiff);
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
     * @return \PayPal\StructType\TelephonySmsSetUserQuota
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
     * @return \PayPal\StructType\TelephonySmsSetUserQuota
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
     * @return \PayPal\StructType\TelephonySmsSetUserQuota
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
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \PayPal\StructType\TelephonySmsSetUserQuota
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get quotaDiff value
     * @return string|null
     */
    public function getQuotaDiff()
    {
        return $this->quotaDiff;
    }
    /**
     * Set quotaDiff value
     * @param string $quotaDiff
     * @return \PayPal\StructType\TelephonySmsSetUserQuota
     */
    public function setQuotaDiff($quotaDiff = null)
    {
        // validation for constraint: string
        if (!is_null($quotaDiff) && !is_string($quotaDiff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quotaDiff)), __LINE__);
        }
        $this->quotaDiff = $quotaDiff;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsSetUserQuota
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
