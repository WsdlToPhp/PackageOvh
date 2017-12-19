<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedAllowedDistributionReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedAllowedDistributionReturn extends AbstractStructBase
{
    /**
     * The distribution
     * @var \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType
     */
    public $distribution;
    /**
     * Constructor method for dedicatedAllowedDistributionReturn
     * @uses DedicatedAllowedDistributionReturn::setDistribution()
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType $distribution
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType $distribution = null)
    {
        $this
            ->setDistribution($distribution);
    }
    /**
     * Get distribution value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType|null
     */
    public function getDistribution()
    {
        return $this->distribution;
    }
    /**
     * Set distribution value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType $distribution
     * @return \PayPal\StructType\DedicatedAllowedDistributionReturn
     */
    public function setDistribution(\PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType $distribution = null)
    {
        $this->distribution = $distribution;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedAllowedDistributionReturn
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
