<?php

namespace Ovh\StructType;

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
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $media;
    /**
     * The destination
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\DedicatedDelServiceMonitoringAlert
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
     * @return \Ovh\StructType\DedicatedDelServiceMonitoringAlert
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
     * @return \Ovh\StructType\DedicatedDelServiceMonitoringAlert
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
     * @return \Ovh\StructType\DedicatedDelServiceMonitoringAlert
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
     * @return \Ovh\StructType\DedicatedDelServiceMonitoringAlert
     */
    public function setMedia($media = null)
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedDelServiceMonitoringAlert
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
