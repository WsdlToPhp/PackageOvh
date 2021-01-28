<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfRtmMemoryModuleStructType
     */
    public $modules;
    /**
     * Constructor method for rtmMemoryStruct
     * @uses RtmMemoryStruct::setMemusage()
     * @uses RtmMemoryStruct::setSwapusage()
     * @uses RtmMemoryStruct::setModules()
     * @param int $memusage
     * @param int $swapusage
     * @param \Ovh\ArrayType\MyArrayOfRtmMemoryModuleStructType $modules
     */
    public function __construct($memusage = null, $swapusage = null, \Ovh\ArrayType\MyArrayOfRtmMemoryModuleStructType $modules = null)
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
     * @return \Ovh\StructType\RtmMemoryStruct
     */
    public function setMemusage($memusage = null)
    {
        // validation for constraint: int
        if (!is_null($memusage) && !(is_int($memusage) || ctype_digit($memusage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($memusage, true), gettype($memusage)), __LINE__);
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
     * @return \Ovh\StructType\RtmMemoryStruct
     */
    public function setSwapusage($swapusage = null)
    {
        // validation for constraint: int
        if (!is_null($swapusage) && !(is_int($swapusage) || ctype_digit($swapusage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($swapusage, true), gettype($swapusage)), __LINE__);
        }
        $this->swapusage = $swapusage;
        return $this;
    }
    /**
     * Get modules value
     * @return \Ovh\ArrayType\MyArrayOfRtmMemoryModuleStructType|null
     */
    public function getModules()
    {
        return $this->modules;
    }
    /**
     * Set modules value
     * @param \Ovh\ArrayType\MyArrayOfRtmMemoryModuleStructType $modules
     * @return \Ovh\StructType\RtmMemoryStruct
     */
    public function setModules(\Ovh\ArrayType\MyArrayOfRtmMemoryModuleStructType $modules = null)
    {
        $this->modules = $modules;
        return $this;
    }
}
