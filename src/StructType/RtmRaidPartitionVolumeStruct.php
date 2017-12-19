<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmRaidPartitionVolumeStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmRaidPartitionVolumeStruct extends AbstractStructBase
{
    /**
     * The volumeName
     * @var string
     */
    public $volumeName;
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
     * The type
     * @var string
     */
    public $type;
    /**
     * The capacity
     * @var string
     */
    public $capacity;
    /**
     * The phys
     * @var int
     */
    public $phys;
    /**
     * The members
     * @var \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeMemberStructType
     */
    public $members;
    /**
     * Constructor method for rtmRaidPartitionVolumeStruct
     * @uses RtmRaidPartitionVolumeStruct::setVolumeName()
     * @uses RtmRaidPartitionVolumeStruct::setFlags()
     * @uses RtmRaidPartitionVolumeStruct::setStatus()
     * @uses RtmRaidPartitionVolumeStruct::setType()
     * @uses RtmRaidPartitionVolumeStruct::setCapacity()
     * @uses RtmRaidPartitionVolumeStruct::setPhys()
     * @uses RtmRaidPartitionVolumeStruct::setMembers()
     * @param string $volumeName
     * @param string $flags
     * @param string $status
     * @param string $type
     * @param string $capacity
     * @param int $phys
     * @param \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeMemberStructType $members
     */
    public function __construct($volumeName = null, $flags = null, $status = null, $type = null, $capacity = null, $phys = null, \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeMemberStructType $members = null)
    {
        $this
            ->setVolumeName($volumeName)
            ->setFlags($flags)
            ->setStatus($status)
            ->setType($type)
            ->setCapacity($capacity)
            ->setPhys($phys)
            ->setMembers($members);
    }
    /**
     * Get volumeName value
     * @return string|null
     */
    public function getVolumeName()
    {
        return $this->volumeName;
    }
    /**
     * Set volumeName value
     * @param string $volumeName
     * @return \Ovh\StructType\RtmRaidPartitionVolumeStruct
     */
    public function setVolumeName($volumeName = null)
    {
        // validation for constraint: string
        if (!is_null($volumeName) && !is_string($volumeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($volumeName)), __LINE__);
        }
        $this->volumeName = $volumeName;
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
     * @return \Ovh\StructType\RtmRaidPartitionVolumeStruct
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
     * @return \Ovh\StructType\RtmRaidPartitionVolumeStruct
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\RtmRaidPartitionVolumeStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Ovh\StructType\RtmRaidPartitionVolumeStruct
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
     * Get phys value
     * @return int|null
     */
    public function getPhys()
    {
        return $this->phys;
    }
    /**
     * Set phys value
     * @param int $phys
     * @return \Ovh\StructType\RtmRaidPartitionVolumeStruct
     */
    public function setPhys($phys = null)
    {
        // validation for constraint: int
        if (!is_null($phys) && !is_numeric($phys)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($phys)), __LINE__);
        }
        $this->phys = $phys;
        return $this;
    }
    /**
     * Get members value
     * @return \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeMemberStructType|null
     */
    public function getMembers()
    {
        return $this->members;
    }
    /**
     * Set members value
     * @param \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeMemberStructType $members
     * @return \Ovh\StructType\RtmRaidPartitionVolumeStruct
     */
    public function setMembers(\Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeMemberStructType $members = null)
    {
        $this->members = $members;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RtmRaidPartitionVolumeStruct
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
