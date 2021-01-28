<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $compatibles;
    /**
     * The actions
     * @var \Ovh\StructType\TelephonySpareActionsStruct
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
     * @param \Ovh\ArrayType\MyArrayOfStringType $compatibles
     * @param \Ovh\StructType\TelephonySpareActionsStruct $actions
     */
    public function __construct($type = null, $family = null, $spare = null, $model = null, $mac = null, \Ovh\ArrayType\MyArrayOfStringType $compatibles = null, \Ovh\StructType\TelephonySpareActionsStruct $actions = null)
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
     * @return \Ovh\StructType\TelephonySpareInfoStruct
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
     * @return \Ovh\StructType\TelephonySpareInfoStruct
     */
    public function setFamily($family = null)
    {
        // validation for constraint: string
        if (!is_null($family) && !is_string($family)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($family, true), gettype($family)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySpareInfoStruct
     */
    public function setSpare($spare = null)
    {
        // validation for constraint: string
        if (!is_null($spare) && !is_string($spare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spare, true), gettype($spare)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySpareInfoStruct
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($model, true), gettype($model)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySpareInfoStruct
     */
    public function setMac($mac = null)
    {
        // validation for constraint: string
        if (!is_null($mac) && !is_string($mac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mac, true), gettype($mac)), __LINE__);
        }
        $this->mac = $mac;
        return $this;
    }
    /**
     * Get compatibles value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getCompatibles()
    {
        return $this->compatibles;
    }
    /**
     * Set compatibles value
     * @param \Ovh\ArrayType\MyArrayOfStringType $compatibles
     * @return \Ovh\StructType\TelephonySpareInfoStruct
     */
    public function setCompatibles(\Ovh\ArrayType\MyArrayOfStringType $compatibles = null)
    {
        $this->compatibles = $compatibles;
        return $this;
    }
    /**
     * Get actions value
     * @return \Ovh\StructType\TelephonySpareActionsStruct|null
     */
    public function getActions()
    {
        return $this->actions;
    }
    /**
     * Set actions value
     * @param \Ovh\StructType\TelephonySpareActionsStruct $actions
     * @return \Ovh\StructType\TelephonySpareInfoStruct
     */
    public function setActions(\Ovh\StructType\TelephonySpareActionsStruct $actions = null)
    {
        $this->actions = $actions;
        return $this;
    }
}
