<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmRaidStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmRaidStruct extends AbstractStructBase
{
    /**
     * The units
     * @var \Ovh\ArrayType\MyArrayOfRtmRaidPartitionStructType
     */
    public $units;
    /**
     * Constructor method for rtmRaidStruct
     * @uses RtmRaidStruct::setUnits()
     * @param \Ovh\ArrayType\MyArrayOfRtmRaidPartitionStructType $units
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfRtmRaidPartitionStructType $units = null)
    {
        $this
            ->setUnits($units);
    }
    /**
     * Get units value
     * @return \Ovh\ArrayType\MyArrayOfRtmRaidPartitionStructType|null
     */
    public function getUnits()
    {
        return $this->units;
    }
    /**
     * Set units value
     * @param \Ovh\ArrayType\MyArrayOfRtmRaidPartitionStructType $units
     * @return \Ovh\StructType\RtmRaidStruct
     */
    public function setUnits(\Ovh\ArrayType\MyArrayOfRtmRaidPartitionStructType $units = null)
    {
        $this->units = $units;
        return $this;
    }
}
