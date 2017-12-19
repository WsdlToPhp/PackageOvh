<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupListStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupListStruct extends AbstractStructBase
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
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $src;
    /**
     * The include
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $include;
    /**
     * The exclude
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $exclude;
    /**
     * The excludeHard
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $excludeHard;
    /**
     * Constructor method for dedicatedBackupListStruct
     * @uses DedicatedBackupListStruct::setBackupId()
     * @uses DedicatedBackupListStruct::setBackupFeature()
     * @uses DedicatedBackupListStruct::setEnable()
     * @uses DedicatedBackupListStruct::setLanguage()
     * @uses DedicatedBackupListStruct::setBackupSize()
     * @uses DedicatedBackupListStruct::setSshPort()
     * @uses DedicatedBackupListStruct::setPercentUsed()
     * @uses DedicatedBackupListStruct::setHostname()
     * @uses DedicatedBackupListStruct::setBackupName()
     * @uses DedicatedBackupListStruct::setEmail()
     * @uses DedicatedBackupListStruct::setSnapshotNumber()
     * @uses DedicatedBackupListStruct::setSuperBackupName()
     * @uses DedicatedBackupListStruct::setBackupType()
     * @uses DedicatedBackupListStruct::setSrc()
     * @uses DedicatedBackupListStruct::setInclude()
     * @uses DedicatedBackupListStruct::setExclude()
     * @uses DedicatedBackupListStruct::setExcludeHard()
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
     * @param \PayPal\ArrayType\MyArrayOfStringType $src
     * @param \PayPal\ArrayType\MyArrayOfStringType $include
     * @param \PayPal\ArrayType\MyArrayOfStringType $exclude
     * @param \PayPal\ArrayType\MyArrayOfStringType $excludeHard
     */
    public function __construct($backupId = null, $backupFeature = null, $enable = null, $language = null, $backupSize = null, $sshPort = null, $percentUsed = null, $hostname = null, $backupName = null, $email = null, $snapshotNumber = null, $superBackupName = null, $backupType = null, \PayPal\ArrayType\MyArrayOfStringType $src = null, \PayPal\ArrayType\MyArrayOfStringType $include = null, \PayPal\ArrayType\MyArrayOfStringType $exclude = null, \PayPal\ArrayType\MyArrayOfStringType $excludeHard = null)
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getSrc()
    {
        return $this->src;
    }
    /**
     * Set src value
     * @param \PayPal\ArrayType\MyArrayOfStringType $src
     * @return \PayPal\StructType\DedicatedBackupListStruct
     */
    public function setSrc(\PayPal\ArrayType\MyArrayOfStringType $src = null)
    {
        $this->src = $src;
        return $this;
    }
    /**
     * Get include value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getInclude()
    {
        return $this->include;
    }
    /**
     * Set include value
     * @param \PayPal\ArrayType\MyArrayOfStringType $include
     * @return \PayPal\StructType\DedicatedBackupListStruct
     */
    public function setInclude(\PayPal\ArrayType\MyArrayOfStringType $include = null)
    {
        $this->include = $include;
        return $this;
    }
    /**
     * Get exclude value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getExclude()
    {
        return $this->exclude;
    }
    /**
     * Set exclude value
     * @param \PayPal\ArrayType\MyArrayOfStringType $exclude
     * @return \PayPal\StructType\DedicatedBackupListStruct
     */
    public function setExclude(\PayPal\ArrayType\MyArrayOfStringType $exclude = null)
    {
        $this->exclude = $exclude;
        return $this;
    }
    /**
     * Get excludeHard value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getExcludeHard()
    {
        return $this->excludeHard;
    }
    /**
     * Set excludeHard value
     * @param \PayPal\ArrayType\MyArrayOfStringType $excludeHard
     * @return \PayPal\StructType\DedicatedBackupListStruct
     */
    public function setExcludeHard(\PayPal\ArrayType\MyArrayOfStringType $excludeHard = null)
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
     * @return \PayPal\StructType\DedicatedBackupListStruct
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