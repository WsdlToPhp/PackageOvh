<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareServiceInfoStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareServiceInfoStruct extends AbstractStructBase
{
    /**
     * The service
     * @var string
     */
    public $service;
    /**
     * The reference
     * @var string
     */
    public $reference;
    /**
     * The parents
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $parents;
    /**
     * The actions
     * @var \PayPal\StructType\TelephonySpareActionsStruct
     */
    public $actions;
    /**
     * Constructor method for telephonySpareServiceInfoStruct
     * @uses TelephonySpareServiceInfoStruct::setService()
     * @uses TelephonySpareServiceInfoStruct::setReference()
     * @uses TelephonySpareServiceInfoStruct::setParents()
     * @uses TelephonySpareServiceInfoStruct::setActions()
     * @param string $service
     * @param string $reference
     * @param \PayPal\ArrayType\MyArrayOfStringType $parents
     * @param \PayPal\StructType\TelephonySpareActionsStruct $actions
     */
    public function __construct($service = null, $reference = null, \PayPal\ArrayType\MyArrayOfStringType $parents = null, \PayPal\StructType\TelephonySpareActionsStruct $actions = null)
    {
        $this
            ->setService($service)
            ->setReference($reference)
            ->setParents($parents)
            ->setActions($actions);
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \PayPal\StructType\TelephonySpareServiceInfoStruct
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \PayPal\StructType\TelephonySpareServiceInfoStruct
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
    /**
     * Get parents value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getParents()
    {
        return $this->parents;
    }
    /**
     * Set parents value
     * @param \PayPal\ArrayType\MyArrayOfStringType $parents
     * @return \PayPal\StructType\TelephonySpareServiceInfoStruct
     */
    public function setParents(\PayPal\ArrayType\MyArrayOfStringType $parents = null)
    {
        $this->parents = $parents;
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
     * @return \PayPal\StructType\TelephonySpareServiceInfoStruct
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
     * @return \PayPal\StructType\TelephonySpareServiceInfoStruct
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
