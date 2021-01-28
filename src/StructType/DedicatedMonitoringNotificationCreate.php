<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringNotificationCreate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringNotificationCreate extends AbstractStructBase
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
     * The nicAlert
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nicAlert;
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
     * Constructor method for dedicatedMonitoringNotificationCreate
     * @uses DedicatedMonitoringNotificationCreate::setSession()
     * @uses DedicatedMonitoringNotificationCreate::setHostname()
     * @uses DedicatedMonitoringNotificationCreate::setNicAlert()
     * @uses DedicatedMonitoringNotificationCreate::setLanguage()
     * @uses DedicatedMonitoringNotificationCreate::setStatus()
     * @param string $session
     * @param string $hostname
     * @param string $nicAlert
     * @param string $language
     * @param string $status
     */
    public function __construct($session = null, $hostname = null, $nicAlert = null, $language = null, $status = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setNicAlert($nicAlert)
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
     * @return \Ovh\StructType\DedicatedMonitoringNotificationCreate
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
     * @return \Ovh\StructType\DedicatedMonitoringNotificationCreate
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
     * @return \Ovh\StructType\DedicatedMonitoringNotificationCreate
     */
    public function setNicAlert($nicAlert = null)
    {
        // validation for constraint: string
        if (!is_null($nicAlert) && !is_string($nicAlert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nicAlert, true), gettype($nicAlert)), __LINE__);
        }
        $this->nicAlert = $nicAlert;
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
     * @return \Ovh\StructType\DedicatedMonitoringNotificationCreate
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
     * @return \Ovh\StructType\DedicatedMonitoringNotificationCreate
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
