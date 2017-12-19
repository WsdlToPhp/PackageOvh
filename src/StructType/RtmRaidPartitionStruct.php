<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmRaidPartitionStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmRaidPartitionStruct extends AbstractStructBase
{
    /**
     * The partition
     * @var string
     */
    public $partition;
    /**
     * The volumes
     * @var \PayPal\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType
     */
    public $volumes;
    /**
     * Constructor method for rtmRaidPartitionStruct
     * @uses RtmRaidPartitionStruct::setPartition()
     * @uses RtmRaidPartitionStruct::setVolumes()
     * @param string $partition
     * @param \PayPal\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType $volumes
     */
    public function __construct($partition = null, \PayPal\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType $volumes = null)
    {
        $this
            ->setPartition($partition)
            ->setVolumes($volumes);
    }
    /**
     * Get partition value
     * @return string|null
     */
    public function getPartition()
    {
        return $this->partition;
    }
    /**
     * Set partition value
     * @param string $partition
     * @return \PayPal\StructType\RtmRaidPartitionStruct
     */
    public function setPartition($partition = null)
    {
        // validation for constraint: string
        if (!is_null($partition) && !is_string($partition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partition)), __LINE__);
        }
        $this->partition = $partition;
        return $this;
    }
    /**
     * Get volumes value
     * @return \PayPal\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType|null
     */
    public function getVolumes()
    {
        return $this->volumes;
    }
    /**
     * Set volumes value
     * @param \PayPal\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType $volumes
     * @return \PayPal\StructType\RtmRaidPartitionStruct
     */
    public function setVolumes(\PayPal\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType $volumes = null)
    {
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RtmRaidPartitionStruct
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
