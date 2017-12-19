<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBandwidthManagementReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBandwidthManagementReturn extends AbstractStructBase
{
    /**
     * The serverName
     * @var string
     */
    public $serverName;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * Constructor method for dedicatedBandwidthManagementReturn
     * @uses DedicatedBandwidthManagementReturn::setServerName()
     * @uses DedicatedBandwidthManagementReturn::setId()
     * @uses DedicatedBandwidthManagementReturn::setStatus()
     * @uses DedicatedBandwidthManagementReturn::setDate()
     * @param string $serverName
     * @param int $id
     * @param string $status
     * @param string $date
     */
    public function __construct($serverName = null, $id = null, $status = null, $date = null)
    {
        $this
            ->setServerName($serverName)
            ->setId($id)
            ->setStatus($status)
            ->setDate($date);
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
     * @return \Ovh\StructType\DedicatedBandwidthManagementReturn
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
     * @return \Ovh\StructType\DedicatedBandwidthManagementReturn
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
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Ovh\StructType\DedicatedBandwidthManagementReturn
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Ovh\StructType\DedicatedBandwidthManagementReturn
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedBandwidthManagementReturn
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
