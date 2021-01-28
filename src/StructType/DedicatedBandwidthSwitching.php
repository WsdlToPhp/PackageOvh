<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBandwidthSwitching StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBandwidthSwitching extends AbstractStructBase
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
     * The oldBandwidth
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $oldBandwidth;
    /**
     * The newBandwidth
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $newBandwidth;
    /**
     * Constructor method for dedicatedBandwidthSwitching
     * @uses DedicatedBandwidthSwitching::setSession()
     * @uses DedicatedBandwidthSwitching::setHostname()
     * @uses DedicatedBandwidthSwitching::setOldBandwidth()
     * @uses DedicatedBandwidthSwitching::setNewBandwidth()
     * @param string $session
     * @param string $hostname
     * @param string $oldBandwidth
     * @param string $newBandwidth
     */
    public function __construct($session = null, $hostname = null, $oldBandwidth = null, $newBandwidth = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setOldBandwidth($oldBandwidth)
            ->setNewBandwidth($newBandwidth);
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
     * @return \Ovh\StructType\DedicatedBandwidthSwitching
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
     * @return \Ovh\StructType\DedicatedBandwidthSwitching
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
     * Get oldBandwidth value
     * @return string|null
     */
    public function getOldBandwidth()
    {
        return $this->oldBandwidth;
    }
    /**
     * Set oldBandwidth value
     * @param string $oldBandwidth
     * @return \Ovh\StructType\DedicatedBandwidthSwitching
     */
    public function setOldBandwidth($oldBandwidth = null)
    {
        // validation for constraint: string
        if (!is_null($oldBandwidth) && !is_string($oldBandwidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldBandwidth, true), gettype($oldBandwidth)), __LINE__);
        }
        $this->oldBandwidth = $oldBandwidth;
        return $this;
    }
    /**
     * Get newBandwidth value
     * @return string|null
     */
    public function getNewBandwidth()
    {
        return $this->newBandwidth;
    }
    /**
     * Set newBandwidth value
     * @param string $newBandwidth
     * @return \Ovh\StructType\DedicatedBandwidthSwitching
     */
    public function setNewBandwidth($newBandwidth = null)
    {
        // validation for constraint: string
        if (!is_null($newBandwidth) && !is_string($newBandwidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newBandwidth, true), gettype($newBandwidth)), __LINE__);
        }
        $this->newBandwidth = $newBandwidth;
        return $this;
    }
}
