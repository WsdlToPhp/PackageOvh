<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringServiceAddNotification StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringServiceAddNotification extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The ip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * The port
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $port;
    /**
     * The protocol
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $protocol;
    /**
     * The period
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $period;
    /**
     * The string
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $string;
    /**
     * The url
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $url;
    /**
     * The nicAlert
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nicAlert;
    /**
     * Constructor method for dedicatedMonitoringServiceAddNotification
     * @uses DedicatedMonitoringServiceAddNotification::setSession()
     * @uses DedicatedMonitoringServiceAddNotification::setHostname()
     * @uses DedicatedMonitoringServiceAddNotification::setIp()
     * @uses DedicatedMonitoringServiceAddNotification::setPort()
     * @uses DedicatedMonitoringServiceAddNotification::setProtocol()
     * @uses DedicatedMonitoringServiceAddNotification::setPeriod()
     * @uses DedicatedMonitoringServiceAddNotification::setString()
     * @uses DedicatedMonitoringServiceAddNotification::setUrl()
     * @uses DedicatedMonitoringServiceAddNotification::setNicAlert()
     * @param string $session
     * @param string $hostname
     * @param string $ip
     * @param int $port
     * @param string $protocol
     * @param string $period
     * @param string $string
     * @param string $url
     * @param string $nicAlert
     */
    public function __construct($session = null, $hostname = null, $ip = null, $port = null, $protocol = null, $period = null, $string = null, $url = null, $nicAlert = null)
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
            ->setNicAlert($nicAlert);
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
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
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
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostname)), __LINE__);
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
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip)), __LINE__);
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
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
     */
    public function setPort($port = null)
    {
        // validation for constraint: int
        if (!is_null($port) && !is_numeric($port)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($port)), __LINE__);
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
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
     */
    public function setProtocol($protocol = null)
    {
        // validation for constraint: string
        if (!is_null($protocol) && !is_string($protocol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($protocol)), __LINE__);
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
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
     */
    public function setPeriod($period = null)
    {
        // validation for constraint: string
        if (!is_null($period) && !is_string($period)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period)), __LINE__);
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
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
     */
    public function setString($string = null)
    {
        // validation for constraint: string
        if (!is_null($string) && !is_string($string)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($string)), __LINE__);
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
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Get nicAlert value
     * @return string|null
     */
    public function getNicAlert()
    {
        return $this->nicAlert;
    }
    /**
     * Set nicAlert value
     * @param string $nicAlert
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
     */
    public function setNicAlert($nicAlert = null)
    {
        // validation for constraint: string
        if (!is_null($nicAlert) && !is_string($nicAlert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicAlert)), __LINE__);
        }
        $this->nicAlert = $nicAlert;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedMonitoringServiceAddNotification
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
