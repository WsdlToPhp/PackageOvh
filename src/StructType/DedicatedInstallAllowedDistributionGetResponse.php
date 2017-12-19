<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInstallAllowedDistributionGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInstallAllowedDistributionGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\DedicatedAllowedDistributionReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedInstallAllowedDistributionGetResponse
     * @uses DedicatedInstallAllowedDistributionGetResponse::setReturn()
     * @param \PayPal\StructType\DedicatedAllowedDistributionReturn $return
     */
    public function __construct(\PayPal\StructType\DedicatedAllowedDistributionReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\DedicatedAllowedDistributionReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\DedicatedAllowedDistributionReturn $return
     * @return \PayPal\StructType\DedicatedInstallAllowedDistributionGetResponse
     */
    public function setReturn(\PayPal\StructType\DedicatedAllowedDistributionReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedInstallAllowedDistributionGetResponse
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
