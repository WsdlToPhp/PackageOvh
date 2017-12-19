<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareInfoStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareInfoStruct extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The family
     * @var string
     */
    public $family;
    /**
     * The spare
     * @var string
     */
    public $spare;
    /**
     * The model
     * @var string
     */
    public $model;
    /**
     * The mac
     * @var string
     */
    public $mac;
    /**
     * The compatibles
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $compatibles;
    /**
     * The actions
     * @var \PayPal\StructType\TelephonySpareActionsStruct
     */
    public $actions;
    /**
     * Constructor method for telephonySpareInfoStruct
     * @uses TelephonySpareInfoStruct::setType()
     * @uses TelephonySpareInfoStruct::setFamily()
     * @uses TelephonySpareInfoStruct::setSpare()
     * @uses TelephonySpareInfoStruct::setModel()
     * @uses TelephonySpareInfoStruct::setMac()
     * @uses TelephonySpareInfoStruct::setCompatibles()
     * @uses TelephonySpareInfoStruct::setActions()
     * @param string $type
     * @param string $family
     * @param string $spare
     * @param string $model
     * @param string $mac
     * @param \PayPal\ArrayType\MyArrayOfStringType $compatibles
     * @param \PayPal\StructType\TelephonySpareActionsStruct $actions
     */
    public function __construct($type = null, $family = null, $spare = null, $model = null, $mac = null, \PayPal\ArrayType\MyArrayOfStringType $compatibles = null, \PayPal\StructType\TelephonySpareActionsStruct $actions = null)
    {
        $this
            ->setType($type)
            ->setFamily($family)
            ->setSpare($spare)
            ->setModel($model)
            ->setMac($mac)
            ->setCompatibles($compatibles)
            ->setActions($actions);
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
     * @return \PayPal\StructType\TelephonySpareInfoStruct
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
     * Get family value
     * @return string|null
     */
    public function getFamily()
    {
        return $this->family;
    }
    /**
     * Set family value
     * @param string $family
     * @return \PayPal\StructType\TelephonySpareInfoStruct
     */
    public function setFamily($family = null)
    {
        // validation for constraint: string
        if (!is_null($family) && !is_string($family)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($family)), __LINE__);
        }
        $this->family = $family;
        return $this;
    }
    /**
     * Get spare value
     * @return string|null
     */
    public function getSpare()
    {
        return $this->spare;
    }
    /**
     * Set spare value
     * @param string $spare
     * @return \PayPal\StructType\TelephonySpareInfoStruct
     */
    public function setSpare($spare = null)
    {
        // validation for constraint: string
        if (!is_null($spare) && !is_string($spare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($spare)), __LINE__);
        }
        $this->spare = $spare;
        return $this;
    }
    /**
     * Get model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param string $model
     * @return \PayPal\StructType\TelephonySpareInfoStruct
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        $this->model = $model;
        return $this;
    }
    /**
     * Get mac value
     * @return string|null
     */
    public function getMac()
    {
        return $this->mac;
    }
    /**
     * Set mac value
     * @param string $mac
     * @return \PayPal\StructType\TelephonySpareInfoStruct
     */
    public function setMac($mac = null)
    {
        // validation for constraint: string
        if (!is_null($mac) && !is_string($mac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mac)), __LINE__);
        }
        $this->mac = $mac;
        return $this;
    }
    /**
     * Get compatibles value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getCompatibles()
    {
        return $this->compatibles;
    }
    /**
     * Set compatibles value
     * @param \PayPal\ArrayType\MyArrayOfStringType $compatibles
     * @return \PayPal\StructType\TelephonySpareInfoStruct
     */
    public function setCompatibles(\PayPal\ArrayType\MyArrayOfStringType $compatibles = null)
    {
        $this->compatibles = $compatibles;
        return $this;
    }
    /**
     * Get actions value
     * @return \PayPal\StructType\TelephonySpareActionsStruct|null
     */
    public function getActions()
    {
        return $this->actions;
    }
    /**
     * Set actions value
     * @param \PayPal\StructType\TelephonySpareActionsStruct $actions
     * @return \PayPal\StructType\TelephonySpareInfoStruct
     */
    public function setActions(\PayPal\StructType\TelephonySpareActionsStruct $actions = null)
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySpareInfoStruct
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
