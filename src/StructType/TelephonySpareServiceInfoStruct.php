<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $parents;
    /**
     * The actions
     * @var \Ovh\StructType\TelephonySpareActionsStruct
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
     * @param \Ovh\ArrayType\MyArrayOfStringType $parents
     * @param \Ovh\StructType\TelephonySpareActionsStruct $actions
     */
    public function __construct($service = null, $reference = null, \Ovh\ArrayType\MyArrayOfStringType $parents = null, \Ovh\StructType\TelephonySpareActionsStruct $actions = null)
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
     * @return \Ovh\StructType\TelephonySpareServiceInfoStruct
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySpareServiceInfoStruct
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
    /**
     * Get parents value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getParents()
    {
        return $this->parents;
    }
    /**
     * Set parents value
     * @param \Ovh\ArrayType\MyArrayOfStringType $parents
     * @return \Ovh\StructType\TelephonySpareServiceInfoStruct
     */
    public function setParents(\Ovh\ArrayType\MyArrayOfStringType $parents = null)
    {
        $this->parents = $parents;
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
     * @return \Ovh\StructType\TelephonySpareServiceInfoStruct
     */
    public function setActions(\Ovh\StructType\TelephonySpareActionsStruct $actions = null)
    {
        $this->actions = $actions;
        return $this;
    }
}
