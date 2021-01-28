<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType
     */
    public $volumes;
    /**
     * Constructor method for rtmRaidPartitionStruct
     * @uses RtmRaidPartitionStruct::setPartition()
     * @uses RtmRaidPartitionStruct::setVolumes()
     * @param string $partition
     * @param \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType $volumes
     */
    public function __construct($partition = null, \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType $volumes = null)
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
     * @return \Ovh\StructType\RtmRaidPartitionStruct
     */
    public function setPartition($partition = null)
    {
        // validation for constraint: string
        if (!is_null($partition) && !is_string($partition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partition, true), gettype($partition)), __LINE__);
        }
        $this->partition = $partition;
        return $this;
    }
    /**
     * Get volumes value
     * @return \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType|null
     */
    public function getVolumes()
    {
        return $this->volumes;
    }
    /**
     * Set volumes value
     * @param \Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType $volumes
     * @return \Ovh\StructType\RtmRaidPartitionStruct
     */
    public function setVolumes(\Ovh\ArrayType\MyArrayOfRtmRaidPartitionVolumeStructType $volumes = null)
    {
        $this->volumes = $volumes;
        return $this;
    }
}
