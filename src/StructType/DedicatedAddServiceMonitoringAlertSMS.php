<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedAddServiceMonitoringAlertSMS StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedAddServiceMonitoringAlertSMS extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ip
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * The port
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $port;
    /**
     * The itemId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $itemId;
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
     * Constructor method for dedicatedAddServiceMonitoringAlertSMS
     * @uses DedicatedAddServiceMonitoringAlertSMS::setSession()
     * @uses DedicatedAddServiceMonitoringAlertSMS::setIp()
     * @uses DedicatedAddServiceMonitoringAlertSMS::setPort()
     * @uses DedicatedAddServiceMonitoringAlertSMS::setItemId()
     * @uses DedicatedAddServiceMonitoringAlertSMS::setSmsAccount()
     * @uses DedicatedAddServiceMonitoringAlertSMS::setPhoneNumberTo()
     * @param string $session
     * @param string $ip
     * @param int $port
     * @param int $itemId
     * @param string $smsAccount
     * @param string $phoneNumberTo
     */
    public function __construct($session = null, $ip = null, $port = null, $itemId = null, $smsAccount = null, $phoneNumberTo = null)
    {
        $this
            ->setSession($session)
            ->setIp($ip)
            ->setPort($port)
            ->setItemId($itemId)
            ->setSmsAccount($smsAccount)
            ->setPhoneNumberTo($phoneNumberTo);
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
     * @return \Ovh\StructType\DedicatedAddServiceMonitoringAlertSMS
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
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \Ovh\StructType\DedicatedAddServiceMonitoringAlertSMS
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get port value
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }
    /**
     * Set port value
     * @param int $port
     * @return \Ovh\StructType\DedicatedAddServiceMonitoringAlertSMS
     */
    public function setPort($port = null)
    {
        // validation for constraint: int
        if (!is_null($port) && !(is_int($port) || ctype_digit($port))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($port, true), gettype($port)), __LINE__);
        }
        $this->port = $port;
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Ovh\StructType\DedicatedAddServiceMonitoringAlertSMS
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
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
     * @return \Ovh\StructType\DedicatedAddServiceMonitoringAlertSMS
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
     * @return \Ovh\StructType\DedicatedAddServiceMonitoringAlertSMS
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
}
