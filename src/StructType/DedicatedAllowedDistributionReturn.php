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
}
