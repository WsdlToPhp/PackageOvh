<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType
     */
    public $basicDistributions;
    /**
     * The readyToUse
     * @var \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType
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
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $basicDistributions
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $readyToUse
     * @param string $type
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $basicDistributions = null, \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $readyToUse = null, $type = null)
    {
        $this
            ->setBasicDistributions($basicDistributions)
            ->setReadyToUse($readyToUse)
            ->setType($type);
    }
    /**
     * Get basicDistributions value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType|null
     */
    public function getBasicDistributions()
    {
        return $this->basicDistributions;
    }
    /**
     * Set basicDistributions value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $basicDistributions
     * @return \Ovh\StructType\DedicatedAllowedDistributionMoreStruct
     */
    public function setBasicDistributions(\Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $basicDistributions = null)
    {
        $this->basicDistributions = $basicDistributions;
        return $this;
    }
    /**
     * Get readyToUse value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType|null
     */
    public function getReadyToUse()
    {
        return $this->readyToUse;
    }
    /**
     * Set readyToUse value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $readyToUse
     * @return \Ovh\StructType\DedicatedAllowedDistributionMoreStruct
     */
    public function setReadyToUse(\Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionDetailsStructType $readyToUse = null)
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
     * @return \Ovh\StructType\DedicatedAllowedDistributionMoreStruct
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
}
