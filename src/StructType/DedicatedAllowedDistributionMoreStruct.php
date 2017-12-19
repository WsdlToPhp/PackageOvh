<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedAllowedDistributionMoreStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedAllowedDistributionMoreStruct extends AbstractStructBase
{
    /**
     * The basicDistributions
     * @var \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType
     */
    public $basicDistributions;
    /**
     * The readyToUse
     * @var \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType
     */
    public $readyToUse;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * Constructor method for dedicatedAllowedDistributionMoreStruct
     * @uses DedicatedAllowedDistributionMoreStruct::setBasicDistributions()
     * @uses DedicatedAllowedDistributionMoreStruct::setReadyToUse()
     * @uses DedicatedAllowedDistributionMoreStruct::setType()
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $basicDistributions
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $readyToUse
     * @param string $type
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $basicDistributions = null, \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $readyToUse = null, $type = null)
    {
        $this
            ->setBasicDistributions($basicDistributions)
            ->setReadyToUse($readyToUse)
            ->setType($type);
    }
    /**
     * Get basicDistributions value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType|null
     */
    public function getBasicDistributions()
    {
        return $this->basicDistributions;
    }
    /**
     * Set basicDistributions value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $basicDistributions
     * @return \PayPal\StructType\DedicatedAllowedDistributionMoreStruct
     */
    public function setBasicDistributions(\PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $basicDistributions = null)
    {
        $this->basicDistributions = $basicDistributions;
        return $this;
    }
    /**
     * Get readyToUse value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType|null
     */
    public function getReadyToUse()
    {
        return $this->readyToUse;
    }
    /**
     * Set readyToUse value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $readyToUse
     * @return \PayPal\StructType\DedicatedAllowedDistributionMoreStruct
     */
    public function setReadyToUse(\PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $readyToUse = null)
    {
        $this->readyToUse = $readyToUse;
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
     * @return \PayPal\StructType\DedicatedAllowedDistributionMoreStruct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedAllowedDistributionMoreStruct
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