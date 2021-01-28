<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupExcludeAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupExcludeAdd extends AbstractStructBase
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
     * The backupId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $backupId;
    /**
     * The exclude
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $exclude;
    /**
     * Constructor method for dedicatedBackupExcludeAdd
     * @uses DedicatedBackupExcludeAdd::setSession()
     * @uses DedicatedBackupExcludeAdd::setHostname()
     * @uses DedicatedBackupExcludeAdd::setBackupId()
     * @uses DedicatedBackupExcludeAdd::setExclude()
     * @param string $session
     * @param string $hostname
     * @param string $backupId
     * @param string $exclude
     */
    public function __construct($session = null, $hostname = null, $backupId = null, $exclude = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setBackupId($backupId)
            ->setExclude($exclude);
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
     * @return \Ovh\StructType\DedicatedBackupExcludeAdd
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
     * @return \Ovh\StructType\DedicatedBackupExcludeAdd
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
     * Get backupId value
     * @return string|null
     */
    public function getBackupId()
    {
        return $this->backupId;
    }
    /**
     * Set backupId value
     * @param string $backupId
     * @return \Ovh\StructType\DedicatedBackupExcludeAdd
     */
    public function setBackupId($backupId = null)
    {
        // validation for constraint: string
        if (!is_null($backupId) && !is_string($backupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($backupId, true), gettype($backupId)), __LINE__);
        }
        $this->backupId = $backupId;
        return $this;
    }
    /**
     * Get exclude value
     * @return string|null
     */
    public function getExclude()
    {
        return $this->exclude;
    }
    /**
     * Set exclude value
     * @param string $exclude
     * @return \Ovh\StructType\DedicatedBackupExcludeAdd
     */
    public function setExclude($exclude = null)
    {
        // validation for constraint: string
        if (!is_null($exclude) && !is_string($exclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exclude, true), gettype($exclude)), __LINE__);
        }
        $this->exclude = $exclude;
        return $this;
    }
}
