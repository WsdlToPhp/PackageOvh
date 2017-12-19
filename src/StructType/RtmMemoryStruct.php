<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmMemoryStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmMemoryStruct extends AbstractStructBase
{
    /**
     * The memusage
     * @var int
     */
    public $memusage;
    /**
     * The swapusage
     * @var int
     */
    public $swapusage;
    /**
     * The modules
     * @var \PayPal\ArrayType\MyArrayOfRtmMemoryModuleStructType
     */
    public $modules;
    /**
     * Constructor method for rtmMemoryStruct
     * @uses RtmMemoryStruct::setMemusage()
     * @uses RtmMemoryStruct::setSwapusage()
     * @uses RtmMemoryStruct::setModules()
     * @param int $memusage
     * @param int $swapusage
     * @param \PayPal\ArrayType\MyArrayOfRtmMemoryModuleStructType $modules
     */
    public function __construct($memusage = null, $swapusage = null, \PayPal\ArrayType\MyArrayOfRtmMemoryModuleStructType $modules = null)
    {
        $this
            ->setMemusage($memusage)
            ->setSwapusage($swapusage)
            ->setModules($modules);
    }
    /**
     * Get memusage value
     * @return int|null
     */
    public function getMemusage()
    {
        return $this->memusage;
    }
    /**
     * Set memusage value
     * @param int $memusage
     * @return \PayPal\StructType\RtmMemoryStruct
     */
    public function setMemusage($memusage = null)
    {
        // validation for constraint: int
        if (!is_null($memusage) && !is_numeric($memusage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($memusage)), __LINE__);
        }
        $this->memusage = $memusage;
        return $this;
    }
    /**
     * Get swapusage value
     * @return int|null
     */
    public function getSwapusage()
    {
        return $this->swapusage;
    }
    /**
     * Set swapusage value
     * @param int $swapusage
     * @return \PayPal\StructType\RtmMemoryStruct
     */
    public function setSwapusage($swapusage = null)
    {
        // validation for constraint: int
        if (!is_null($swapusage) && !is_numeric($swapusage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($swapusage)), __LINE__);
        }
        $this->swapusage = $swapusage;
        return $this;
    }
    /**
     * Get modules value
     * @return \PayPal\ArrayType\MyArrayOfRtmMemoryModuleStructType|null
     */
    public function getModules()
    {
        return $this->modules;
    }
    /**
     * Set modules value
     * @param \PayPal\ArrayType\MyArrayOfRtmMemoryModuleStructType $modules
     * @return \PayPal\StructType\RtmMemoryStruct
     */
    public function setModules(\PayPal\ArrayType\MyArrayOfRtmMemoryModuleStructType $modules = null)
    {
        $this->modules = $modules;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RtmMemoryStruct
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
