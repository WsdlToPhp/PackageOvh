<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedDelServiceMonitoringAlert StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedDelServiceMonitoringAlert extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
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
     * The itemId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $itemId;
    /**
     * The media
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $media;
    /**
     * The destination
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $destination;
    /**
     * Constructor method for dedicatedDelServiceMonitoringAlert
     * @uses DedicatedDelServiceMonitoringAlert::setSession()
     * @uses DedicatedDelServiceMonitoringAlert::setIp()
     * @uses DedicatedDelServiceMonitoringAlert::setPort()
     * @uses DedicatedDelServiceMonitoringAlert::setItemId()
     * @uses DedicatedDelServiceMonitoringAlert::setMedia()
     * @uses DedicatedDelServiceMonitoringAlert::setDestination()
     * @param string $session
     * @param string $ip
     * @param int $port
     * @param int $itemId
     * @param string $media
     * @param string $destination
     */
    public function __construct($session = null, $ip = null, $port = null, $itemId = null, $media = null, $destination = null)
    {
        $this
            ->setSession($session)
            ->setIp($ip)
            ->setPort($port)
            ->setItemId($itemId)
            ->setMedia($media)
            ->setDestination($destination);
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
     * @return \PayPal\StructType\DedicatedDelServiceMonitoringAlert
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
     * @return \PayPal\StructType\DedicatedDelServiceMonitoringAlert
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
     * @return \PayPal\StructType\DedicatedDelServiceMonitoringAlert
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
     * @return \PayPal\StructType\DedicatedDelServiceMonitoringAlert
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: int
        if (!is_null($itemId) && !is_numeric($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia()
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \PayPal\StructType\DedicatedDelServiceMonitoringAlert
     */
    public function setMedia($media = null)
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($media)), __LINE__);
        }
        $this->media = $media;
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
     * @return \PayPal\StructType\DedicatedDelServiceMonitoringAlert
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedDelServiceMonitoringAlert
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
