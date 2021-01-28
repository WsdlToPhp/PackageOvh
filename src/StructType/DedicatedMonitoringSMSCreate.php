<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringSMSCreate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringSMSCreate extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The smsAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The phoneNumberTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phoneNumberTo;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * Constructor method for dedicatedMonitoringSMSCreate
     * @uses DedicatedMonitoringSMSCreate::setSession()
     * @uses DedicatedMonitoringSMSCreate::setHostname()
     * @uses DedicatedMonitoringSMSCreate::setSmsAccount()
     * @uses DedicatedMonitoringSMSCreate::setPhoneNumberTo()
     * @uses DedicatedMonitoringSMSCreate::setLanguage()
     * @uses DedicatedMonitoringSMSCreate::setStatus()
     * @param string $session
     * @param string $hostname
     * @param string $smsAccount
     * @param string $phoneNumberTo
     * @param string $language
     * @param string $status
     */
    public function __construct($session = null, $hostname = null, $smsAccount = null, $phoneNumberTo = null, $language = null, $status = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setSmsAccount($smsAccount)
            ->setPhoneNumberTo($phoneNumberTo)
            ->setLanguage($language)
            ->setStatus($status);
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
     * @return \Ovh\StructType\DedicatedMonitoringSMSCreate
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
     * Get hostname value
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * Set hostname value
     * @param string $hostname
     * @return \Ovh\StructType\DedicatedMonitoringSMSCreate
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostname, true), gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
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
     * @return \Ovh\StructType\DedicatedMonitoringSMSCreate
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
     * Get phoneNumberTo value
     * @return string|null
     */
    public function getPhoneNumberTo()
    {
        return $this->phoneNumberTo;
    }
    /**
     * Set phoneNumberTo value
     * @param string $phoneNumberTo
     * @return \Ovh\StructType\DedicatedMonitoringSMSCreate
     */
    public function setPhoneNumberTo($phoneNumberTo = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumberTo) && !is_string($phoneNumberTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumberTo, true), gettype($phoneNumberTo)), __LINE__);
        }
        $this->phoneNumberTo = $phoneNumberTo;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Ovh\StructType\DedicatedMonitoringSMSCreate
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
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
     * @return \Ovh\StructType\DedicatedMonitoringSMSCreate
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
}
