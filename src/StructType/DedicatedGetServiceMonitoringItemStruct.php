<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedGetServiceMonitoringItemStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedGetServiceMonitoringItemStruct extends AbstractStructBase
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
     * The sms
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $sms;
    /**
     * The email
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $email;
    /**
     * Constructor method for dedicatedGetServiceMonitoringItemStruct
     * @uses DedicatedGetServiceMonitoringItemStruct::setId()
     * @uses DedicatedGetServiceMonitoringItemStruct::setIp()
     * @uses DedicatedGetServiceMonitoringItemStruct::setPort()
     * @uses DedicatedGetServiceMonitoringItemStruct::setProtocol()
     * @uses DedicatedGetServiceMonitoringItemStruct::setPeriod()
     * @uses DedicatedGetServiceMonitoringItemStruct::setString()
     * @uses DedicatedGetServiceMonitoringItemStruct::setUrl()
     * @uses DedicatedGetServiceMonitoringItemStruct::setSms()
     * @uses DedicatedGetServiceMonitoringItemStruct::setEmail()
     * @param int $id
     * @param string $ip
     * @param int $port
     * @param string $protocol
     * @param string $period
     * @param string $string
     * @param string $url
     * @param \Ovh\ArrayType\MyArrayOfStringType $sms
     * @param \Ovh\ArrayType\MyArrayOfStringType $email
     */
    public function __construct($id = null, $ip = null, $port = null, $protocol = null, $period = null, $string = null, $url = null, \Ovh\ArrayType\MyArrayOfStringType $sms = null, \Ovh\ArrayType\MyArrayOfStringType $email = null)
    {
        $this
            ->setId($id)
            ->setIp($ip)
            ->setPort($port)
            ->setProtocol($protocol)
            ->setPeriod($period)
            ->setString($string)
            ->setUrl($url)
            ->setSms($sms)
            ->setEmail($email);
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
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
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
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
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
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
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
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
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
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
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
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
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
     * Get sms value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getSms()
    {
        return $this->sms;
    }
    /**
     * Set sms value
     * @param \Ovh\ArrayType\MyArrayOfStringType $sms
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
     */
    public function setSms(\Ovh\ArrayType\MyArrayOfStringType $sms = null)
    {
        $this->sms = $sms;
        return $this;
    }
    /**
     * Get email value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param \Ovh\ArrayType\MyArrayOfStringType $email
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
     */
    public function setEmail(\Ovh\ArrayType\MyArrayOfStringType $email = null)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
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
