<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFreedomStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFreedomStruct extends AbstractStructBase
{
    /**
     * The remaining
     * @var int
     */
    public $remaining;
    /**
     * The assigned
     * @var int
     */
    public $assigned;
    /**
     * The total
     * @var int
     */
    public $total;
    /**
     * The preset
     * @var int
     */
    public $preset;
    /**
     * Constructor method for dedicatedFreedomStruct
     * @uses DedicatedFreedomStruct::setRemaining()
     * @uses DedicatedFreedomStruct::setAssigned()
     * @uses DedicatedFreedomStruct::setTotal()
     * @uses DedicatedFreedomStruct::setPreset()
     * @param int $remaining
     * @param int $assigned
     * @param int $total
     * @param int $preset
     */
    public function __construct($remaining = null, $assigned = null, $total = null, $preset = null)
    {
        $this
            ->setRemaining($remaining)
            ->setAssigned($assigned)
            ->setTotal($total)
            ->setPreset($preset);
    }
    /**
     * Get remaining value
     * @return int|null
     */
    public function getRemaining()
    {
        return $this->remaining;
    }
    /**
     * Set remaining value
     * @param int $remaining
     * @return \PayPal\StructType\DedicatedFreedomStruct
     */
    public function setRemaining($remaining = null)
    {
        // validation for constraint: int
        if (!is_null($remaining) && !is_numeric($remaining)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($remaining)), __LINE__);
        }
        $this->remaining = $remaining;
        return $this;
    }
    /**
     * Get assigned value
     * @return int|null
     */
    public function getAssigned()
    {
        return $this->assigned;
    }
    /**
     * Set assigned value
     * @param int $assigned
     * @return \PayPal\StructType\DedicatedFreedomStruct
     */
    public function setAssigned($assigned = null)
    {
        // validation for constraint: int
        if (!is_null($assigned) && !is_numeric($assigned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($assigned)), __LINE__);
        }
        $this->assigned = $assigned;
        return $this;
    }
    /**
     * Get total value
     * @return int|null
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param int $total
     * @return \PayPal\StructType\DedicatedFreedomStruct
     */
    public function setTotal($total = null)
    {
        // validation for constraint: int
        if (!is_null($total) && !is_numeric($total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($total)), __LINE__);
        }
        $this->total = $total;
        return $this;
    }
    /**
     * Get preset value
     * @return int|null
     */
    public function getPreset()
    {
        return $this->preset;
    }
    /**
     * Set preset value
     * @param int $preset
     * @return \PayPal\StructType\DedicatedFreedomStruct
     */
    public function setPreset($preset = null)
    {
        // validation for constraint: int
        if (!is_null($preset) && !is_numeric($preset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($preset)), __LINE__);
        }
        $this->preset = $preset;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedFreedomStruct
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
