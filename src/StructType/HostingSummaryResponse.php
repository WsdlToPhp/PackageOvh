<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingSummaryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingSummaryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\HostingSummaryReturn
     */
    public $return;
    /**
     * Constructor method for hostingSummaryResponse
     * @uses HostingSummaryResponse::setReturn()
     * @param \Ovh\StructType\HostingSummaryReturn $return
     */
    public function __construct(\Ovh\StructType\HostingSummaryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\HostingSummaryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\HostingSummaryReturn $return
     * @return \Ovh\StructType\HostingSummaryResponse
     */
    public function setReturn(\Ovh\StructType\HostingSummaryReturn $return = null)
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
     * @return \Ovh\StructType\HostingSummaryResponse
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
