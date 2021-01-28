<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringServiceAddSMS StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringServiceAddSMS extends AbstractStructBase
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
     * The protocol
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $protocol;
    /**
     * The period
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $period;
    /**
     * The string
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $string;
    /**
     * The url
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $url;
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
     * Constructor method for dedicatedMonitoringServiceAddSMS
     * @uses DedicatedMonitoringServiceAddSMS::setSession()
     * @uses DedicatedMonitoringServiceAddSMS::setHostname()
     * @uses DedicatedMonitoringServiceAddSMS::setIp()
     * @uses DedicatedMonitoringServiceAddSMS::setPort()
     * @uses DedicatedMonitoringServiceAddSMS::setProtocol()
     * @uses DedicatedMonitoringServiceAddSMS::setPeriod()
     * @uses DedicatedMonitoringServiceAddSMS::setString()
     * @uses DedicatedMonitoringServiceAddSMS::setUrl()
     * @uses DedicatedMonitoringServiceAddSMS::setSmsAccount()
     * @uses DedicatedMonitoringServiceAddSMS::setPhoneNumberTo()
     * @param string $session
     * @param string $hostname
     * @param string $ip
     * @param int $port
     * @param string $protocol
     * @param string $period
     * @param string $string
     * @param string $url
     * @param string $smsAccount
     * @param string $phoneNumberTo
     */
    public function __construct($session = null, $hostname = null, $ip = null, $port = null, $protocol = null, $period = null, $string = null, $url = null, $smsAccount = null, $phoneNumberTo = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setIp($ip)
            ->setPort($port)
            ->setProtocol($protocol)
            ->setPeriod($period)
            ->setString($string)
            ->setUrl($url)
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
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
     * Get protocol value
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
    /**
     * Set protocol value
     * @param string $protocol
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
     */
    public function setProtocol($protocol = null)
    {
        // validation for constraint: string
        if (!is_null($protocol) && !is_string($protocol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($protocol, true), gettype($protocol)), __LINE__);
        }
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * Get period value
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /**
     * Set period value
     * @param string $period
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
     */
    public function setPeriod($period = null)
    {
        // validation for constraint: string
        if (!is_null($period) && !is_string($period)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        $this->period = $period;
        return $this;
    }
    /**
     * Get string value
     * @return string|null
     */
    public function getString()
    {
        return $this->string;
    }
    /**
     * Set string value
     * @param string $string
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
     */
    public function setString($string = null)
    {
        // validation for constraint: string
        if (!is_null($string) && !is_string($string)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($string, true), gettype($string)), __LINE__);
        }
        $this->string = $string;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceAddSMS
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
