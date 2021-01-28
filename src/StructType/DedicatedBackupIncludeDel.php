<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupIncludeDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupIncludeDel extends AbstractStructBase
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
     * The include
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $include;
    /**
     * Constructor method for dedicatedBackupIncludeDel
     * @uses DedicatedBackupIncludeDel::setSession()
     * @uses DedicatedBackupIncludeDel::setHostname()
     * @uses DedicatedBackupIncludeDel::setBackupId()
     * @uses DedicatedBackupIncludeDel::setInclude()
     * @param string $session
     * @param string $hostname
     * @param string $backupId
     * @param string $include
     */
    public function __construct($session = null, $hostname = null, $backupId = null, $include = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setBackupId($backupId)
            ->setInclude($include);
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
     * @return \Ovh\StructType\DedicatedBackupIncludeDel
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
     * @return \Ovh\StructType\DedicatedBackupIncludeDel
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
     * @return \Ovh\StructType\DedicatedBackupIncludeDel
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
     * Get include value
     * @return string|null
     */
    public function getInclude()
    {
        return $this->include;
    }
    /**
     * Set include value
     * @param string $include
     * @return \Ovh\StructType\DedicatedBackupIncludeDel
     */
    public function setInclude($include = null)
    {
        // validation for constraint: string
        if (!is_null($include) && !is_string($include)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($include, true), gettype($include)), __LINE__);
        }
        $this->include = $include;
        return $this;
    }
}
