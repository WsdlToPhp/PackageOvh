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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RtmRaidStruct
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
