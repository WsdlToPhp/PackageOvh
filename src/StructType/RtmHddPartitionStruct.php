<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmHddPartitionStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmHddPartitionStruct extends AbstractStructBase
{
    /**
     * The device
     * @var string
     */
    public $device;
    /**
     * The percentUsed
     * @var int
     */
    public $percentUsed;
    /**
     * The percentInodes
     * @var int
     */
    public $percentInodes;
    /**
     * The mountPoint
     * @var string
     */
    public $mountPoint;
    /**
     * Constructor method for rtmHddPartitionStruct
     * @uses RtmHddPartitionStruct::setDevice()
     * @uses RtmHddPartitionStruct::setPercentUsed()
     * @uses RtmHddPartitionStruct::setPercentInodes()
     * @uses RtmHddPartitionStruct::setMountPoint()
     * @param string $device
     * @param int $percentUsed
     * @param int $percentInodes
     * @param string $mountPoint
     */
    public function __construct($device = null, $percentUsed = null, $percentInodes = null, $mountPoint = null)
    {
        $this
            ->setDevice($device)
            ->setPercentUsed($percentUsed)
            ->setPercentInodes($percentInodes)
            ->setMountPoint($mountPoint);
    }
    /**
     * Get device value
     * @return string|null
     */
    public function getDevice()
    {
        return $this->device;
    }
    /**
     * Set device value
     * @param string $device
     * @return \Ovh\StructType\RtmHddPartitionStruct
     */
    public function setDevice($device = null)
    {
        // validation for constraint: string
        if (!is_null($device) && !is_string($device)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($device)), __LINE__);
        }
        $this->device = $device;
        return $this;
    }
    /**
     * Get percentUsed value
     * @return int|null
     */
    public function getPercentUsed()
    {
        return $this->percentUsed;
    }
    /**
     * Set percentUsed value
     * @param int $percentUsed
     * @return \Ovh\StructType\RtmHddPartitionStruct
     */
    public function setPercentUsed($percentUsed = null)
    {
        // validation for constraint: int
        if (!is_null($percentUsed) && !is_numeric($percentUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($percentUsed)), __LINE__);
        }
        $this->percentUsed = $percentUsed;
        return $this;
    }
    /**
     * Get percentInodes value
     * @return int|null
     */
    public function getPercentInodes()
    {
        return $this->percentInodes;
    }
    /**
     * Set percentInodes value
     * @param int $percentInodes
     * @return \Ovh\StructType\RtmHddPartitionStruct
     */
    public function setPercentInodes($percentInodes = null)
    {
        // validation for constraint: int
        if (!is_null($percentInodes) && !is_numeric($percentInodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($percentInodes)), __LINE__);
        }
        $this->percentInodes = $percentInodes;
        return $this;
    }
    /**
     * Get mountPoint value
     * @return string|null
     */
    public function getMountPoint()
    {
        return $this->mountPoint;
    }
    /**
     * Set mountPoint value
     * @param string $mountPoint
     * @return \Ovh\StructType\RtmHddPartitionStruct
     */
    public function setMountPoint($mountPoint = null)
    {
        // validation for constraint: string
        if (!is_null($mountPoint) && !is_string($mountPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mountPoint)), __LINE__);
        }
        $this->mountPoint = $mountPoint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RtmHddPartitionStruct
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
