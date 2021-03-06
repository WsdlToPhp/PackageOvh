<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAvailableFunctionStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAvailableFunctionStruct extends AbstractStructBase
{
    /**
     * The function
     * @var string
     */
    public $function;
    /**
     * The relatedValue
     * @var string
     */
    public $relatedValue;
    /**
     * The defaultValue
     * @var string
     */
    public $defaultValue;
    /**
     * The possibilities
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $possibilities;
    /**
     * Constructor method for telephonyAvailableFunctionStruct
     * @uses TelephonyAvailableFunctionStruct::setFunction()
     * @uses TelephonyAvailableFunctionStruct::setRelatedValue()
     * @uses TelephonyAvailableFunctionStruct::setDefaultValue()
     * @uses TelephonyAvailableFunctionStruct::setPossibilities()
     * @param string $function
     * @param string $relatedValue
     * @param string $defaultValue
     * @param \Ovh\ArrayType\MyArrayOfStringType $possibilities
     */
    public function __construct($function = null, $relatedValue = null, $defaultValue = null, \Ovh\ArrayType\MyArrayOfStringType $possibilities = null)
    {
        $this
            ->setFunction($function)
            ->setRelatedValue($relatedValue)
            ->setDefaultValue($defaultValue)
            ->setPossibilities($possibilities);
    }
    /**
     * Get function value
     * @return string|null
     */
    public function getFunction()
    {
        return $this->function;
    }
    /**
     * Set function value
     * @param string $function
     * @return \Ovh\StructType\TelephonyAvailableFunctionStruct
     */
    public function setFunction($function = null)
    {
        // validation for constraint: string
        if (!is_null($function) && !is_string($function)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($function, true), gettype($function)), __LINE__);
        }
        $this->function = $function;
        return $this;
    }
    /**
     * Get relatedValue value
     * @return string|null
     */
    public function getRelatedValue()
    {
        return $this->relatedValue;
    }
    /**
     * Set relatedValue value
     * @param string $relatedValue
     * @return \Ovh\StructType\TelephonyAvailableFunctionStruct
     */
    public function setRelatedValue($relatedValue = null)
    {
        // validation for constraint: string
        if (!is_null($relatedValue) && !is_string($relatedValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relatedValue, true), gettype($relatedValue)), __LINE__);
        }
        $this->relatedValue = $relatedValue;
        return $this;
    }
    /**
     * Get defaultValue value
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param string $defaultValue
     * @return \Ovh\StructType\TelephonyAvailableFunctionStruct
     */
    public function setDefaultValue($defaultValue = null)
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->defaultValue = $defaultValue;
        return $this;
    }
    /**
     * Get possibilities value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getPossibilities()
    {
        return $this->possibilities;
    }
    /**
     * Set possibilities value
     * @param \Ovh\ArrayType\MyArrayOfStringType $possibilities
     * @return \Ovh\StructType\TelephonyAvailableFunctionStruct
     */
    public function setPossibilities(\Ovh\ArrayType\MyArrayOfStringType $possibilities = null)
    {
        $this->possibilities = $possibilities;
        return $this;
    }
}
