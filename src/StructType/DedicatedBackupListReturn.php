<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupListReturn extends AbstractStructBase
{
    /**
     * The backupId
     * @var int
     */
    public $backupId;
    /**
     * The backupFeature
     * @var string
     */
    public $backupFeature;
    /**
     * The enable
     * @var int
     */
    public $enable;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * The backupSize
     * @var string
     */
    public $backupSize;
    /**
     * The sshPort
     * @var int
     */
    public $sshPort;
    /**
     * The percentUsed
     * @var string
     */
    public $percentUsed;
    /**
     * The hostname
     * @var string
     */
    public $hostname;
    /**
     * The backupName
     * @var string
     */
    public $backupName;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The snapshotNumber
     * @var int
     */
    public $snapshotNumber;
    /**
     * The superBackupName
     * @var string
     */
    public $superBackupName;
    /**
     * The backupType
     * @var string
     */
    public $backupType;
    /**
     * The src
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $src;
    /**
     * The include
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $include;
    /**
     * The exclude
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $exclude;
    /**
     * The excludeHard
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $excludeHard;
    /**
     * Constructor method for dedicatedBackupListReturn
     * @uses DedicatedBackupListReturn::setBackupId()
     * @uses DedicatedBackupListReturn::setBackupFeature()
     * @uses DedicatedBackupListReturn::setEnable()
     * @uses DedicatedBackupListReturn::setLanguage()
     * @uses DedicatedBackupListReturn::setBackupSize()
     * @uses DedicatedBackupListReturn::setSshPort()
     * @uses DedicatedBackupListReturn::setPercentUsed()
     * @uses DedicatedBackupListReturn::setHostname()
     * @uses DedicatedBackupListReturn::setBackupName()
     * @uses DedicatedBackupListReturn::setEmail()
     * @uses DedicatedBackupListReturn::setSnapshotNumber()
     * @uses DedicatedBackupListReturn::setSuperBackupName()
     * @uses DedicatedBackupListReturn::setBackupType()
     * @uses DedicatedBackupListReturn::setSrc()
     * @uses DedicatedBackupListReturn::setInclude()
     * @uses DedicatedBackupListReturn::setExclude()
     * @uses DedicatedBackupListReturn::setExcludeHard()
     * @param int $backupId
     * @param string $backupFeature
     * @param int $enable
     * @param string $language
     * @param string $backupSize
     * @param int $sshPort
     * @param string $percentUsed
     * @param string $hostname
     * @param string $backupName
     * @param string $email
     * @param int $snapshotNumber
     * @param string $superBackupName
     * @param string $backupType
     * @param \Ovh\ArrayType\MyArrayOfStringType $src
     * @param \Ovh\ArrayType\MyArrayOfStringType $include
     * @param \Ovh\ArrayType\MyArrayOfStringType $exclude
     * @param \Ovh\ArrayType\MyArrayOfStringType $excludeHard
     */
    public function __construct($backupId = null, $backupFeature = null, $enable = null, $language = null, $backupSize = null, $sshPort = null, $percentUsed = null, $hostname = null, $backupName = null, $email = null, $snapshotNumber = null, $superBackupName = null, $backupType = null, \Ovh\ArrayType\MyArrayOfStringType $src = null, \Ovh\ArrayType\MyArrayOfStringType $include = null, \Ovh\ArrayType\MyArrayOfStringType $exclude = null, \Ovh\ArrayType\MyArrayOfStringType $excludeHard = null)
    {
        $this
            ->setBackupId($backupId)
            ->setBackupFeature($backupFeature)
            ->setEnable($enable)
            ->setLanguage($language)
            ->setBackupSize($backupSize)
            ->setSshPort($sshPort)
            ->setPercentUsed($percentUsed)
            ->setHostname($hostname)
            ->setBackupName($backupName)
            ->setEmail($email)
            ->setSnapshotNumber($snapshotNumber)
            ->setSuperBackupName($superBackupName)
            ->setBackupType($backupType)
            ->setSrc($src)
            ->setInclude($include)
            ->setExclude($exclude)
            ->setExcludeHard($excludeHard);
    }
    /**
     * Get backupId value
     * @return int|null
     */
    public function getBackupId()
    {
        return $this->backupId;
    }
    /**
     * Set backupId value
     * @param int $backupId
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setBackupId($backupId = null)
    {
        // validation for constraint: int
        if (!is_null($backupId) && !is_numeric($backupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($backupId)), __LINE__);
        }
        $this->backupId = $backupId;
        return $this;
    }
    /**
     * Get backupFeature value
     * @return string|null
     */
    public function getBackupFeature()
    {
        return $this->backupFeature;
    }
    /**
     * Set backupFeature value
     * @param string $backupFeature
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setBackupFeature($backupFeature = null)
    {
        // validation for constraint: string
        if (!is_null($backupFeature) && !is_string($backupFeature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($backupFeature)), __LINE__);
        }
        $this->backupFeature = $backupFeature;
        return $this;
    }
    /**
     * Get enable value
     * @return int|null
     */
    public function getEnable()
    {
        return $this->enable;
    }
    /**
     * Set enable value
     * @param int $enable
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setEnable($enable = null)
    {
        // validation for constraint: int
        if (!is_null($enable) && !is_numeric($enable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enable)), __LINE__);
        }
        $this->enable = $enable;
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
     * @return \Ovh\StructType\DedicatedBackupListReturn
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
     * Get backupSize value
     * @return string|null
     */
    public function getBackupSize()
    {
        return $this->backupSize;
    }
    /**
     * Set backupSize value
     * @param string $backupSize
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setBackupSize($backupSize = null)
    {
        // validation for constraint: string
        if (!is_null($backupSize) && !is_string($backupSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($backupSize)), __LINE__);
        }
        $this->backupSize = $backupSize;
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
     * @return \Ovh\StructType\DedicatedBackupListReturn
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
     * Get percentUsed value
     * @return string|null
     */
    public function getPercentUsed()
    {
        return $this->percentUsed;
    }
    /**
     * Set percentUsed value
     * @param string $percentUsed
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setPercentUsed($percentUsed = null)
    {
        // validation for constraint: string
        if (!is_null($percentUsed) && !is_string($percentUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentUsed)), __LINE__);
        }
        $this->percentUsed = $percentUsed;
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
     * @return \Ovh\StructType\DedicatedBackupListReturn
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
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setBackupName($backupName = null)
    {
        // validation for constraint: string
        if (!is_null($backupName) && !is_string($backupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($backupName)), __LINE__);
        }
        $this->backupName = $backupName;
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
     * @return \Ovh\StructType\DedicatedBackupListReturn
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
     * Get snapshotNumber value
     * @return int|null
     */
    public function getSnapshotNumber()
    {
        return $this->snapshotNumber;
    }
    /**
     * Set snapshotNumber value
     * @param int $snapshotNumber
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setSnapshotNumber($snapshotNumber = null)
    {
        // validation for constraint: int
        if (!is_null($snapshotNumber) && !is_numeric($snapshotNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($snapshotNumber)), __LINE__);
        }
        $this->snapshotNumber = $snapshotNumber;
        return $this;
    }
    /**
     * Get superBackupName value
     * @return string|null
     */
    public function getSuperBackupName()
    {
        return $this->superBackupName;
    }
    /**
     * Set superBackupName value
     * @param string $superBackupName
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setSuperBackupName($superBackupName = null)
    {
        // validation for constraint: string
        if (!is_null($superBackupName) && !is_string($superBackupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($superBackupName)), __LINE__);
        }
        $this->superBackupName = $superBackupName;
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
     * @return \Ovh\StructType\DedicatedBackupListReturn
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
     * Get src value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getSrc()
    {
        return $this->src;
    }
    /**
     * Set src value
     * @param \Ovh\ArrayType\MyArrayOfStringType $src
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setSrc(\Ovh\ArrayType\MyArrayOfStringType $src = null)
    {
        $this->src = $src;
        return $this;
    }
    /**
     * Get include value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getInclude()
    {
        return $this->include;
    }
    /**
     * Set include value
     * @param \Ovh\ArrayType\MyArrayOfStringType $include
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setInclude(\Ovh\ArrayType\MyArrayOfStringType $include = null)
    {
        $this->include = $include;
        return $this;
    }
    /**
     * Get exclude value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getExclude()
    {
        return $this->exclude;
    }
    /**
     * Set exclude value
     * @param \Ovh\ArrayType\MyArrayOfStringType $exclude
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setExclude(\Ovh\ArrayType\MyArrayOfStringType $exclude = null)
    {
        $this->exclude = $exclude;
        return $this;
    }
    /**
     * Get excludeHard value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getExcludeHard()
    {
        return $this->excludeHard;
    }
    /**
     * Set excludeHard value
     * @param \Ovh\ArrayType\MyArrayOfStringType $excludeHard
     * @return \Ovh\StructType\DedicatedBackupListReturn
     */
    public function setExcludeHard(\Ovh\ArrayType\MyArrayOfStringType $excludeHard = null)
    {
        $this->excludeHard = $excludeHard;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedBackupListReturn
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
