<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType
     */
    public $distribution;
    /**
     * Constructor method for dedicatedAllowedDistributionReturn
     * @uses DedicatedAllowedDistributionReturn::setDistribution()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType $distribution
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType $distribution = null)
    {
        $this
            ->setDistribution($distribution);
    }
    /**
     * Get distribution value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType|null
     */
    public function getDistribution()
    {
        return $this->distribution;
    }
    /**
     * Set distribution value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType $distribution
     * @return \Ovh\StructType\DedicatedAllowedDistributionReturn
     */
    public function setDistribution(\Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionMoreStructType $distribution = null)
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
     * @return \Ovh\StructType\DedicatedAllowedDistributionReturn
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
