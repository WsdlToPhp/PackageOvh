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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverName, true), gettype($serverName)), __LINE__);
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
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
}
