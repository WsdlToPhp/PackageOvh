<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupUpdate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupUpdate extends AbstractStructBase
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
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The snapshot
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $snapshot;
    /**
     * The sshPort
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $sshPort;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $status;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * The src
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $src;
    /**
     * Constructor method for dedicatedBackupUpdate
     * @uses DedicatedBackupUpdate::setSession()
     * @uses DedicatedBackupUpdate::setHostname()
     * @uses DedicatedBackupUpdate::setBackupId()
     * @uses DedicatedBackupUpdate::setEmail()
     * @uses DedicatedBackupUpdate::setSnapshot()
     * @uses DedicatedBackupUpdate::setSshPort()
     * @uses DedicatedBackupUpdate::setStatus()
     * @uses DedicatedBackupUpdate::setLanguage()
     * @uses DedicatedBackupUpdate::setSrc()
     * @param string $session
     * @param string $hostname
     * @param string $backupId
     * @param string $email
     * @param int $snapshot
     * @param int $sshPort
     * @param int $status
     * @param string $language
     * @param string $src
     */
    public function __construct($session = null, $hostname = null, $backupId = null, $email = null, $snapshot = null, $sshPort = null, $status = null, $language = null, $src = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setBackupId($backupId)
            ->setEmail($email)
            ->setSnapshot($snapshot)
            ->setSshPort($sshPort)
            ->setStatus($status)
            ->setLanguage($language)
            ->setSrc($src);
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
     * @return \Ovh\StructType\DedicatedBackupUpdate
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
     * @return \Ovh\StructType\DedicatedBackupUpdate
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
     * @return \Ovh\StructType\DedicatedBackupUpdate
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
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\DedicatedBackupUpdate
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get snapshot value
     * @return int|null
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }
    /**
     * Set snapshot value
     * @param int $snapshot
     * @return \Ovh\StructType\DedicatedBackupUpdate
     */
    public function setSnapshot($snapshot = null)
    {
        // validation for constraint: int
        if (!is_null($snapshot) && !(is_int($snapshot) || ctype_digit($snapshot))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($snapshot, true), gettype($snapshot)), __LINE__);
        }
        $this->snapshot = $snapshot;
        return $this;
    }
    /**
     * Get sshPort value
     * @return int|null
     */
    public function getSshPort()
    {
        return $this->sshPort;
    }
    /**
     * Set sshPort value
     * @param int $sshPort
     * @return \Ovh\StructType\DedicatedBackupUpdate
     */
    public function setSshPort($sshPort = null)
    {
        // validation for constraint: int
        if (!is_null($sshPort) && !(is_int($sshPort) || ctype_digit($sshPort))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sshPort, true), gettype($sshPort)), __LINE__);
        }
        $this->sshPort = $sshPort;
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Ovh\StructType\DedicatedBackupUpdate
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
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
     * @return \Ovh\StructType\DedicatedBackupUpdate
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
     * Get src value
     * @return string|null
     */
    public function getSrc()
    {
        return $this->src;
    }
    /**
     * Set src value
     * @param string $src
     * @return \Ovh\StructType\DedicatedBackupUpdate
     */
    public function setSrc($src = null)
    {
        // validation for constraint: string
        if (!is_null($src) && !is_string($src)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($src, true), gettype($src)), __LINE__);
        }
        $this->src = $src;
        return $this;
    }
}
