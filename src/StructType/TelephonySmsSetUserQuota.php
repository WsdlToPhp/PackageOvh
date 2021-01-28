<?php

namespace Ovh\StructType;

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
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The quotaDiff
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\TelephonySmsSetUserQuota
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
     * @return \Ovh\StructType\TelephonySmsSetUserQuota
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
     * @return \Ovh\StructType\TelephonySmsSetUserQuota
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
     * @return \Ovh\StructType\TelephonySmsSetUserQuota
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsSetUserQuota
     */
    public function setQuotaDiff($quotaDiff = null)
    {
        // validation for constraint: string
        if (!is_null($quotaDiff) && !is_string($quotaDiff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quotaDiff, true), gettype($quotaDiff)), __LINE__);
        }
        $this->quotaDiff = $quotaDiff;
        return $this;
    }
}
