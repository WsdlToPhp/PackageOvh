<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupList extends AbstractStructBase
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
     * The backupName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $backupName;
    /**
     * Constructor method for dedicatedBackupList
     * @uses DedicatedBackupList::setSession()
     * @uses DedicatedBackupList::setHostname()
     * @uses DedicatedBackupList::setBackupId()
     * @uses DedicatedBackupList::setBackupName()
     * @param string $session
     * @param string $hostname
     * @param string $backupId
     * @param string $backupName
     */
    public function __construct($session = null, $hostname = null, $backupId = null, $backupName = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setBackupId($backupId)
            ->setBackupName($backupName);
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
     * @return \Ovh\StructType\DedicatedBackupList
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
     * @return \Ovh\StructType\DedicatedBackupList
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
     * @return \Ovh\StructType\DedicatedBackupList
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
     * Get backupName value
     * @return string|null
     */
    public function getBackupName()
    {
        return $this->backupName;
    }
    /**
     * Set backupName value
     * @param string $backupName
     * @return \Ovh\StructType\DedicatedBackupList
     */
    public function setBackupName($backupName = null)
    {
        // validation for constraint: string
        if (!is_null($backupName) && !is_string($backupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($backupName, true), gettype($backupName)), __LINE__);
        }
        $this->backupName = $backupName;
        return $this;
    }
}
