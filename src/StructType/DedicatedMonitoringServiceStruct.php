<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringServiceStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringServiceStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The port
     * @var int
     */
    public $port;
    /**
     * The protocol
     * @var string
     */
    public $protocol;
    /**
     * The period
     * @var string
     */
    public $period;
    /**
     * The string
     * @var string
     */
    public $string;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * The destination
     * @var string
     */
    public $destination;
    /**
     * Constructor method for dedicatedMonitoringServiceStruct
     * @uses DedicatedMonitoringServiceStruct::setId()
     * @uses DedicatedMonitoringServiceStruct::setIp()
     * @uses DedicatedMonitoringServiceStruct::setPort()
     * @uses DedicatedMonitoringServiceStruct::setProtocol()
     * @uses DedicatedMonitoringServiceStruct::setPeriod()
     * @uses DedicatedMonitoringServiceStruct::setString()
     * @uses DedicatedMonitoringServiceStruct::setUrl()
     * @uses DedicatedMonitoringServiceStruct::setDestination()
     * @param int $id
     * @param string $ip
     * @param int $port
     * @param string $protocol
     * @param string $period
     * @param string $string
     * @param string $url
     * @param string $destination
     */
    public function __construct($id = null, $ip = null, $port = null, $protocol = null, $period = null, $string = null, $url = null, $destination = null)
    {
        $this
            ->setId($id)
            ->setIp($ip)
            ->setPort($port)
            ->setProtocol($protocol)
            ->setPeriod($period)
            ->setString($string)
            ->setUrl($url)
            ->setDestination($destination);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\DedicatedMonitoringServiceStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceStruct
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceStruct
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceStruct
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceStruct
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceStruct
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceStruct
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
     * Get destination value
     * @return string|null
     */
    public function getDestination()
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Ovh\StructType\DedicatedMonitoringServiceStruct
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        return $this;
    }
}
