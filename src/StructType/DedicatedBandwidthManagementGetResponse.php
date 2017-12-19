<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBandwidthManagementGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBandwidthManagementGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\DedicatedBandwidthManagementReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedBandwidthManagementGetResponse
     * @uses DedicatedBandwidthManagementGetResponse::setReturn()
     * @param \PayPal\StructType\DedicatedBandwidthManagementReturn $return
     */
    public function __construct(\PayPal\StructType\DedicatedBandwidthManagementReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\DedicatedBandwidthManagementReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\DedicatedBandwidthManagementReturn $return
     * @return \PayPal\StructType\DedicatedBandwidthManagementGetResponse
     */
    public function setReturn(\PayPal\StructType\DedicatedBandwidthManagementReturn $return = null)
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
     * @return \PayPal\StructType\DedicatedBandwidthManagementGetResponse
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
