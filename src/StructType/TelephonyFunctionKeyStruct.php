<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFunctionKeyStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFunctionKeyStruct extends AbstractStructBase
{
    /**
     * The keyNum
     * @var int
     */
    public $keyNum;
    /**
     * The function
     * @var string
     */
    public $function;
    /**
     * The relatedNumber
     * @var string
     */
    public $relatedNumber;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The default
     * @var string
     */
    public $default;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The functionList
     * @var \Ovh\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType
     */
    public $functionList;
    /**
     * Constructor method for telephonyFunctionKeyStruct
     * @uses TelephonyFunctionKeyStruct::setKeyNum()
     * @uses TelephonyFunctionKeyStruct::setFunction()
     * @uses TelephonyFunctionKeyStruct::setRelatedNumber()
     * @uses TelephonyFunctionKeyStruct::setLabel()
     * @uses TelephonyFunctionKeyStruct::setDefault()
     * @uses TelephonyFunctionKeyStruct::setType()
     * @uses TelephonyFunctionKeyStruct::setFunctionList()
     * @param int $keyNum
     * @param string $function
     * @param string $relatedNumber
     * @param string $label
     * @param string $default
     * @param string $type
     * @param \Ovh\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType $functionList
     */
    public function __construct($keyNum = null, $function = null, $relatedNumber = null, $label = null, $default = null, $type = null, \Ovh\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType $functionList = null)
    {
        $this
            ->setKeyNum($keyNum)
            ->setFunction($function)
            ->setRelatedNumber($relatedNumber)
            ->setLabel($label)
            ->setDefault($default)
            ->setType($type)
            ->setFunctionList($functionList);
    }
    /**
     * Get keyNum value
     * @return int|null
     */
    public function getKeyNum()
    {
        return $this->keyNum;
    }
    /**
     * Set keyNum value
     * @param int $keyNum
     * @return \Ovh\StructType\TelephonyFunctionKeyStruct
     */
    public function setKeyNum($keyNum = null)
    {
        // validation for constraint: int
        if (!is_null($keyNum) && !(is_int($keyNum) || ctype_digit($keyNum))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNum, true), gettype($keyNum)), __LINE__);
        }
        $this->keyNum = $keyNum;
        return $this;
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
     * @return \Ovh\StructType\TelephonyFunctionKeyStruct
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
     * Get relatedNumber value
     * @return string|null
     */
    public function getRelatedNumber()
    {
        return $this->relatedNumber;
    }
    /**
     * Set relatedNumber value
     * @param string $relatedNumber
     * @return \Ovh\StructType\TelephonyFunctionKeyStruct
     */
    public function setRelatedNumber($relatedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($relatedNumber) && !is_string($relatedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relatedNumber, true), gettype($relatedNumber)), __LINE__);
        }
        $this->relatedNumber = $relatedNumber;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \Ovh\StructType\TelephonyFunctionKeyStruct
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get default value
     * @return string|null
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * Set default value
     * @param string $default
     * @return \Ovh\StructType\TelephonyFunctionKeyStruct
     */
    public function setDefault($default = null)
    {
        // validation for constraint: string
        if (!is_null($default) && !is_string($default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default, true), gettype($default)), __LINE__);
        }
        $this->default = $default;
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
     * @return \Ovh\StructType\TelephonyFunctionKeyStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get functionList value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType|null
     */
    public function getFunctionList()
    {
        return $this->functionList;
    }
    /**
     * Set functionList value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType $functionList
     * @return \Ovh\StructType\TelephonyFunctionKeyStruct
     */
    public function setFunctionList(\Ovh\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType $functionList = null)
    {
        $this->functionList = $functionList;
        return $this;
    }
}
