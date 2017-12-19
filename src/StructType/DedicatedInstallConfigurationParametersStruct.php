<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInstallConfigurationParametersStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInstallConfigurationParametersStruct extends AbstractStructBase
{
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * The bitFormat
     * @var string
     */
    public $bitFormat;
    /**
     * The softRaidDevices
     * @var int
     */
    public $softRaidDevices;
    /**
     * The serverName
     * @var string
     */
    public $serverName;
    /**
     * The softRaid
     * @var string
     */
    public $softRaid;
    /**
     * The distribution
     * @var string
     */
    public $distribution;
    /**
     * The resinstallTodoId
     * @var int
     */
    public $resinstallTodoId;
    /**
     * Constructor method for dedicatedInstallConfigurationParametersStruct
     * @uses DedicatedInstallConfigurationParametersStruct::setLanguage()
     * @uses DedicatedInstallConfigurationParametersStruct::setBitFormat()
     * @uses DedicatedInstallConfigurationParametersStruct::setSoftRaidDevices()
     * @uses DedicatedInstallConfigurationParametersStruct::setServerName()
     * @uses DedicatedInstallConfigurationParametersStruct::setSoftRaid()
     * @uses DedicatedInstallConfigurationParametersStruct::setDistribution()
     * @uses DedicatedInstallConfigurationParametersStruct::setResinstallTodoId()
     * @param string $language
     * @param string $bitFormat
     * @param int $softRaidDevices
     * @param string $serverName
     * @param string $softRaid
     * @param string $distribution
     * @param int $resinstallTodoId
     */
    public function __construct($language = null, $bitFormat = null, $softRaidDevices = null, $serverName = null, $softRaid = null, $distribution = null, $resinstallTodoId = null)
    {
        $this
            ->setLanguage($language)
            ->setBitFormat($bitFormat)
            ->setSoftRaidDevices($softRaidDevices)
            ->setServerName($serverName)
            ->setSoftRaid($softRaid)
            ->setDistribution($distribution)
            ->setResinstallTodoId($resinstallTodoId);
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
     * @return \PayPal\StructType\DedicatedInstallConfigurationParametersStruct
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
     * Get bitFormat value
     * @return string|null
     */
    public function getBitFormat()
    {
        return $this->bitFormat;
    }
    /**
     * Set bitFormat value
     * @param string $bitFormat
     * @return \PayPal\StructType\DedicatedInstallConfigurationParametersStruct
     */
    public function setBitFormat($bitFormat = null)
    {
        // validation for constraint: string
        if (!is_null($bitFormat) && !is_string($bitFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bitFormat)), __LINE__);
        }
        $this->bitFormat = $bitFormat;
        return $this;
    }
    /**
     * Get softRaidDevices value
     * @return int|null
     */
    public function getSoftRaidDevices()
    {
        return $this->softRaidDevices;
    }
    /**
     * Set softRaidDevices value
     * @param int $softRaidDevices
     * @return \PayPal\StructType\DedicatedInstallConfigurationParametersStruct
     */
    public function setSoftRaidDevices($softRaidDevices = null)
    {
        // validation for constraint: int
        if (!is_null($softRaidDevices) && !is_numeric($softRaidDevices)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($softRaidDevices)), __LINE__);
        }
        $this->softRaidDevices = $softRaidDevices;
        return $this;
    }
    /**
     * Get serverName value
     * @return string|null
     */
    public function getServerName()
    {
        return $this->serverName;
    }
    /**
     * Set serverName value
     * @param string $serverName
     * @return \PayPal\StructType\DedicatedInstallConfigurationParametersStruct
     */
    public function setServerName($serverName = null)
    {
        // validation for constraint: string
        if (!is_null($serverName) && !is_string($serverName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serverName)), __LINE__);
        }
        $this->serverName = $serverName;
        return $this;
    }
    /**
     * Get softRaid value
     * @return string|null
     */
    public function getSoftRaid()
    {
        return $this->softRaid;
    }
    /**
     * Set softRaid value
     * @param string $softRaid
     * @return \PayPal\StructType\DedicatedInstallConfigurationParametersStruct
     */
    public function setSoftRaid($softRaid = null)
    {
        // validation for constraint: string
        if (!is_null($softRaid) && !is_string($softRaid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($softRaid)), __LINE__);
        }
        $this->softRaid = $softRaid;
        return $this;
    }
    /**
     * Get distribution value
     * @return string|null
     */
    public function getDistribution()
    {
        return $this->distribution;
    }
    /**
     * Set distribution value
     * @param string $distribution
     * @return \PayPal\StructType\DedicatedInstallConfigurationParametersStruct
     */
    public function setDistribution($distribution = null)
    {
        // validation for constraint: string
        if (!is_null($distribution) && !is_string($distribution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distribution)), __LINE__);
        }
        $this->distribution = $distribution;
        return $this;
    }
    /**
     * Get resinstallTodoId value
     * @return int|null
     */
    public function getResinstallTodoId()
    {
        return $this->resinstallTodoId;
    }
    /**
     * Set resinstallTodoId value
     * @param int $resinstallTodoId
     * @return \PayPal\StructType\DedicatedInstallConfigurationParametersStruct
     */
    public function setResinstallTodoId($resinstallTodoId = null)
    {
        // validation for constraint: int
        if (!is_null($resinstallTodoId) && !is_numeric($resinstallTodoId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resinstallTodoId)), __LINE__);
        }
        $this->resinstallTodoId = $resinstallTodoId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedInstallConfigurationParametersStruct
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
