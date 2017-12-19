<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupUpdateDate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupUpdateDate extends AbstractStructBase
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
     * The monday
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $monday;
    /**
     * The tuesday
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tuesday;
    /**
     * The wednesday
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wednesday;
    /**
     * The thursday
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $thursday;
    /**
     * The friday
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $friday;
    /**
     * The saturday
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $saturday;
    /**
     * The sunday
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sunday;
    /**
     * Constructor method for dedicatedBackupUpdateDate
     * @uses DedicatedBackupUpdateDate::setSession()
     * @uses DedicatedBackupUpdateDate::setHostname()
     * @uses DedicatedBackupUpdateDate::setBackupId()
     * @uses DedicatedBackupUpdateDate::setMonday()
     * @uses DedicatedBackupUpdateDate::setTuesday()
     * @uses DedicatedBackupUpdateDate::setWednesday()
     * @uses DedicatedBackupUpdateDate::setThursday()
     * @uses DedicatedBackupUpdateDate::setFriday()
     * @uses DedicatedBackupUpdateDate::setSaturday()
     * @uses DedicatedBackupUpdateDate::setSunday()
     * @param string $session
     * @param string $hostname
     * @param string $backupId
     * @param string $monday
     * @param string $tuesday
     * @param string $wednesday
     * @param string $thursday
     * @param string $friday
     * @param string $saturday
     * @param string $sunday
     */
    public function __construct($session = null, $hostname = null, $backupId = null, $monday = null, $tuesday = null, $wednesday = null, $thursday = null, $friday = null, $saturday = null, $sunday = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setBackupId($backupId)
            ->setMonday($monday)
            ->setTuesday($tuesday)
            ->setWednesday($wednesday)
            ->setThursday($thursday)
            ->setFriday($friday)
            ->setSaturday($saturday)
            ->setSunday($sunday);
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
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
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
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
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
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
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
     * Get monday value
     * @return string|null
     */
    public function getMonday()
    {
        return $this->monday;
    }
    /**
     * Set monday value
     * @param string $monday
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
     */
    public function setMonday($monday = null)
    {
        // validation for constraint: string
        if (!is_null($monday) && !is_string($monday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($monday)), __LINE__);
        }
        $this->monday = $monday;
        return $this;
    }
    /**
     * Get tuesday value
     * @return string|null
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }
    /**
     * Set tuesday value
     * @param string $tuesday
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
     */
    public function setTuesday($tuesday = null)
    {
        // validation for constraint: string
        if (!is_null($tuesday) && !is_string($tuesday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tuesday)), __LINE__);
        }
        $this->tuesday = $tuesday;
        return $this;
    }
    /**
     * Get wednesday value
     * @return string|null
     */
    public function getWednesday()
    {
        return $this->wednesday;
    }
    /**
     * Set wednesday value
     * @param string $wednesday
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
     */
    public function setWednesday($wednesday = null)
    {
        // validation for constraint: string
        if (!is_null($wednesday) && !is_string($wednesday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wednesday)), __LINE__);
        }
        $this->wednesday = $wednesday;
        return $this;
    }
    /**
     * Get thursday value
     * @return string|null
     */
    public function getThursday()
    {
        return $this->thursday;
    }
    /**
     * Set thursday value
     * @param string $thursday
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
     */
    public function setThursday($thursday = null)
    {
        // validation for constraint: string
        if (!is_null($thursday) && !is_string($thursday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($thursday)), __LINE__);
        }
        $this->thursday = $thursday;
        return $this;
    }
    /**
     * Get friday value
     * @return string|null
     */
    public function getFriday()
    {
        return $this->friday;
    }
    /**
     * Set friday value
     * @param string $friday
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
     */
    public function setFriday($friday = null)
    {
        // validation for constraint: string
        if (!is_null($friday) && !is_string($friday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($friday)), __LINE__);
        }
        $this->friday = $friday;
        return $this;
    }
    /**
     * Get saturday value
     * @return string|null
     */
    public function getSaturday()
    {
        return $this->saturday;
    }
    /**
     * Set saturday value
     * @param string $saturday
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
     */
    public function setSaturday($saturday = null)
    {
        // validation for constraint: string
        if (!is_null($saturday) && !is_string($saturday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($saturday)), __LINE__);
        }
        $this->saturday = $saturday;
        return $this;
    }
    /**
     * Get sunday value
     * @return string|null
     */
    public function getSunday()
    {
        return $this->sunday;
    }
    /**
     * Set sunday value
     * @param string $sunday
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
     */
    public function setSunday($sunday = null)
    {
        // validation for constraint: string
        if (!is_null($sunday) && !is_string($sunday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sunday)), __LINE__);
        }
        $this->sunday = $sunday;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedBackupUpdateDate
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
