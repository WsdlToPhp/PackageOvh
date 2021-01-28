<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringStatusUpdate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringStatusUpdate extends AbstractStructBase
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
     * The disabled
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $disabled;
    /**
     * Constructor method for dedicatedMonitoringStatusUpdate
     * @uses DedicatedMonitoringStatusUpdate::setSession()
     * @uses DedicatedMonitoringStatusUpdate::setHostname()
     * @uses DedicatedMonitoringStatusUpdate::setDisabled()
     * @param string $session
     * @param string $hostname
     * @param bool $disabled
     */
    public function __construct($session = null, $hostname = null, $disabled = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setDisabled($disabled);
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
     * @return \Ovh\StructType\DedicatedMonitoringStatusUpdate
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
     * @return \Ovh\StructType\DedicatedMonitoringStatusUpdate
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
     * Get disabled value
     * @return bool|null
     */
    public function getDisabled()
    {
        return $this->disabled;
    }
    /**
     * Set disabled value
     * @param bool $disabled
     * @return \Ovh\StructType\DedicatedMonitoringStatusUpdate
     */
    public function setDisabled($disabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($disabled) && !is_bool($disabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disabled, true), gettype($disabled)), __LINE__);
        }
        $this->disabled = $disabled;
        return $this;
    }
}
