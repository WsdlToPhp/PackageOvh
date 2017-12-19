<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupGetPlanningStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupGetPlanningStruct extends AbstractStructBase
{
    /**
     * The day
     * @var string
     */
    public $day;
    /**
     * The planning
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $planning;
    /**
     * Constructor method for dedicatedBackupGetPlanningStruct
     * @uses DedicatedBackupGetPlanningStruct::setDay()
     * @uses DedicatedBackupGetPlanningStruct::setPlanning()
     * @param string $day
     * @param \Ovh\ArrayType\MyArrayOfStringType $planning
     */
    public function __construct($day = null, \Ovh\ArrayType\MyArrayOfStringType $planning = null)
    {
        $this
            ->setDay($day)
            ->setPlanning($planning);
    }
    /**
     * Get day value
     * @return string|null
     */
    public function getDay()
    {
        return $this->day;
    }
    /**
     * Set day value
     * @param string $day
     * @return \Ovh\StructType\DedicatedBackupGetPlanningStruct
     */
    public function setDay($day = null)
    {
        // validation for constraint: string
        if (!is_null($day) && !is_string($day)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($day)), __LINE__);
        }
        $this->day = $day;
        return $this;
    }
    /**
     * Get planning value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getPlanning()
    {
        return $this->planning;
    }
    /**
     * Set planning value
     * @param \Ovh\ArrayType\MyArrayOfStringType $planning
     * @return \Ovh\StructType\DedicatedBackupGetPlanningStruct
     */
    public function setPlanning(\Ovh\ArrayType\MyArrayOfStringType $planning = null)
    {
        $this->planning = $planning;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedBackupGetPlanningStruct
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
