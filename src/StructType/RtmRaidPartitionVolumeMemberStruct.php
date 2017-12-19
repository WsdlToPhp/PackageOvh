<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmRaidPartitionVolumeMemberStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmRaidPartitionVolumeMemberStruct extends AbstractStructBase
{
    /**
     * The memberName
     * @var string
     */
    public $memberName;
    /**
     * The modelName
     * @var string
     */
    public $modelName;
    /**
     * The flags
     * @var string
     */
    public $flags;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The capacity
     * @var string
     */
    public $capacity;
    /**
     * Constructor method for rtmRaidPartitionVolumeMemberStruct
     * @uses RtmRaidPartitionVolumeMemberStruct::setMemberName()
     * @uses RtmRaidPartitionVolumeMemberStruct::setModelName()
     * @uses RtmRaidPartitionVolumeMemberStruct::setFlags()
     * @uses RtmRaidPartitionVolumeMemberStruct::setStatus()
     * @uses RtmRaidPartitionVolumeMemberStruct::setCapacity()
     * @param string $memberName
     * @param string $modelName
     * @param string $flags
     * @param string $status
     * @param string $capacity
     */
    public function __construct($memberName = null, $modelName = null, $flags = null, $status = null, $capacity = null)
    {
        $this
            ->setMemberName($memberName)
            ->setModelName($modelName)
            ->setFlags($flags)
            ->setStatus($status)
            ->setCapacity($capacity);
    }
    /**
     * Get memberName value
     * @return string|null
     */
    public function getMemberName()
    {
        return $this->memberName;
    }
    /**
     * Set memberName value
     * @param string $memberName
     * @return \Ovh\StructType\RtmRaidPartitionVolumeMemberStruct
     */
    public function setMemberName($memberName = null)
    {
        // validation for constraint: string
        if (!is_null($memberName) && !is_string($memberName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memberName)), __LINE__);
        }
        $this->memberName = $memberName;
        return $this;
    }
    /**
     * Get modelName value
     * @return string|null
     */
    public function getModelName()
    {
        return $this->modelName;
    }
    /**
     * Set modelName value
     * @param string $modelName
     * @return \Ovh\StructType\RtmRaidPartitionVolumeMemberStruct
     */
    public function setModelName($modelName = null)
    {
        // validation for constraint: string
        if (!is_null($modelName) && !is_string($modelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modelName)), __LINE__);
        }
        $this->modelName = $modelName;
        return $this;
    }
    /**
     * Get flags value
     * @return string|null
     */
    public function getFlags()
    {
        return $this->flags;
    }
    /**
     * Set flags value
     * @param string $flags
     * @return \Ovh\StructType\RtmRaidPartitionVolumeMemberStruct
     */
    public function setFlags($flags = null)
    {
        // validation for constraint: string
        if (!is_null($flags) && !is_string($flags)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flags)), __LINE__);
        }
        $this->flags = $flags;
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
     * @return \Ovh\StructType\RtmRaidPartitionVolumeMemberStruct
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
     * Get capacity value
     * @return string|null
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
    /**
     * Set capacity value
     * @param string $capacity
     * @return \Ovh\StructType\RtmRaidPartitionVolumeMemberStruct
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: string
        if (!is_null($capacity) && !is_string($capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($capacity)), __LINE__);
        }
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RtmRaidPartitionVolumeMemberStruct
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
