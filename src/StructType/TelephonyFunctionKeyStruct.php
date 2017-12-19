<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType
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
     * @param \PayPal\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType $functionList
     */
    public function __construct($keyNum = null, $function = null, $relatedNumber = null, $label = null, $default = null, $type = null, \PayPal\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType $functionList = null)
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
     * @return \PayPal\StructType\TelephonyFunctionKeyStruct
     */
    public function setKeyNum($keyNum = null)
    {
        // validation for constraint: int
        if (!is_null($keyNum) && !is_numeric($keyNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($keyNum)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyFunctionKeyStruct
     */
    public function setFunction($function = null)
    {
        // validation for constraint: string
        if (!is_null($function) && !is_string($function)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyFunctionKeyStruct
     */
    public function setRelatedNumber($relatedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($relatedNumber) && !is_string($relatedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relatedNumber)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyFunctionKeyStruct
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($label)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyFunctionKeyStruct
     */
    public function setDefault($default = null)
    {
        // validation for constraint: string
        if (!is_null($default) && !is_string($default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($default)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyFunctionKeyStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get functionList value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType|null
     */
    public function getFunctionList()
    {
        return $this->functionList;
    }
    /**
     * Set functionList value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType $functionList
     * @return \PayPal\StructType\TelephonyFunctionKeyStruct
     */
    public function setFunctionList(\PayPal\ArrayType\MyArrayOfTelephonyAvailableFunctionStructType $functionList = null)
    {
        $this->functionList = $functionList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyFunctionKeyStruct
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
