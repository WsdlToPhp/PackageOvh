<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupDateStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupDateStruct extends AbstractStructBase
{
    /**
     * The hour
     * @var string
     */
    public $hour;
    /**
     * The superBackupName
     * @var string
     */
    public $superBackupName;
    /**
     * The day
     * @var string
     */
    public $day;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The backupCount
     * @var int
     */
    public $backupCount;
    /**
     * Constructor method for dedicatedBackupDateStruct
     * @uses DedicatedBackupDateStruct::setHour()
     * @uses DedicatedBackupDateStruct::setSuperBackupName()
     * @uses DedicatedBackupDateStruct::setDay()
     * @uses DedicatedBackupDateStruct::setId()
     * @uses DedicatedBackupDateStruct::setBackupCount()
     * @param string $hour
     * @param string $superBackupName
     * @param string $day
     * @param int $id
     * @param int $backupCount
     */
    public function __construct($hour = null, $superBackupName = null, $day = null, $id = null, $backupCount = null)
    {
        $this
            ->setHour($hour)
            ->setSuperBackupName($superBackupName)
            ->setDay($day)
            ->setId($id)
            ->setBackupCount($backupCount);
    }
    /**
     * Get hour value
     * @return string|null
     */
    public function getHour()
    {
        return $this->hour;
    }
    /**
     * Set hour value
     * @param string $hour
     * @return \PayPal\StructType\DedicatedBackupDateStruct
     */
    public function setHour($hour = null)
    {
        // validation for constraint: string
        if (!is_null($hour) && !is_string($hour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hour)), __LINE__);
        }
        $this->hour = $hour;
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
     * @return \PayPal\StructType\DedicatedBackupDateStruct
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
     * Get day value
     * @return string|null
     */
    public function getDay()
    {
        return $this->day;
    }
    /**
     * Set day value
     * @param string $day
     * @return \PayPal\StructType\DedicatedBackupDateStruct
     */
    public function setDay($day = null)
    {
        // validation for constraint: string
        if (!is_null($day) && !is_string($day)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($day)), __LINE__);
        }
        $this->day = $day;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \PayPal\StructType\DedicatedBackupDateStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get backupCount value
     * @return int|null
     */
    public function getBackupCount()
    {
        return $this->backupCount;
    }
    /**
     * Set backupCount value
     * @param int $backupCount
     * @return \PayPal\StructType\DedicatedBackupDateStruct
     */
    public function setBackupCount($backupCount = null)
    {
        // validation for constraint: int
        if (!is_null($backupCount) && !is_numeric($backupCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($backupCount)), __LINE__);
        }
        $this->backupCount = $backupCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedBackupDateStruct
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
