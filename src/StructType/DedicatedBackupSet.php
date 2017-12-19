<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupSet StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupSet extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The backupId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $backupId;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The backupType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $backupType;
    /**
     * The snapshot
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $snapshot;
    /**
     * The sshPort
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $sshPort;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $status;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * The src
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $src;
    /**
     * Constructor method for dedicatedBackupSet
     * @uses DedicatedBackupSet::setSession()
     * @uses DedicatedBackupSet::setHostname()
     * @uses DedicatedBackupSet::setBackupId()
     * @uses DedicatedBackupSet::setEmail()
     * @uses DedicatedBackupSet::setBackupType()
     * @uses DedicatedBackupSet::setSnapshot()
     * @uses DedicatedBackupSet::setSshPort()
     * @uses DedicatedBackupSet::setStatus()
     * @uses DedicatedBackupSet::setLanguage()
     * @uses DedicatedBackupSet::setSrc()
     * @param string $session
     * @param string $hostname
     * @param string $backupId
     * @param string $email
     * @param string $backupType
     * @param int $snapshot
     * @param int $sshPort
     * @param int $status
     * @param string $language
     * @param string $src
     */
    public function __construct($session = null, $hostname = null, $backupId = null, $email = null, $backupType = null, $snapshot = null, $sshPort = null, $status = null, $language = null, $src = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setBackupId($backupId)
            ->setEmail($email)
            ->setBackupType($backupType)
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
     * @return \Ovh\StructType\DedicatedBackupSet
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
     * @return \Ovh\StructType\DedicatedBackupSet
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostname)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedBackupSet
     */
    public function setBackupId($backupId = null)
    {
        // validation for constraint: string
        if (!is_null($backupId) && !is_string($backupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($backupId)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedBackupSet
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get backupType value
     * @return string|null
     */
    public function getBackupType()
    {
        return $this->backupType;
    }
    /**
     * Set backupType value
     * @param string $backupType
     * @return \Ovh\StructType\DedicatedBackupSet
     */
    public function setBackupType($backupType = null)
    {
        // validation for constraint: string
        if (!is_null($backupType) && !is_string($backupType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($backupType)), __LINE__);
        }
        $this->backupType = $backupType;
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
     * @return \Ovh\StructType\DedicatedBackupSet
     */
    public function setSnapshot($snapshot = null)
    {
        // validation for constraint: int
        if (!is_null($snapshot) && !is_numeric($snapshot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($snapshot)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedBackupSet
     */
    public function setSshPort($sshPort = null)
    {
        // validation for constraint: int
        if (!is_null($sshPort) && !is_numeric($sshPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sshPort)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedBackupSet
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !is_numeric($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($status)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedBackupSet
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedBackupSet
     */
    public function setSrc($src = null)
    {
        // validation for constraint: string
        if (!is_null($src) && !is_string($src)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($src)), __LINE__);
        }
        $this->src = $src;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedBackupSet
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
