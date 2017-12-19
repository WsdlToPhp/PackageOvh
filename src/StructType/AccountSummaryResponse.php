<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountSummaryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccountSummaryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\AccountSummaryReturn
     */
    public $return;
    /**
     * Constructor method for accountSummaryResponse
     * @uses AccountSummaryResponse::setReturn()
     * @param \PayPal\StructType\AccountSummaryReturn $return
     */
    public function __construct(\PayPal\StructType\AccountSummaryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\AccountSummaryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\AccountSummaryReturn $return
     * @return \PayPal\StructType\AccountSummaryResponse
     */
    public function setReturn(\PayPal\StructType\AccountSummaryReturn $return = null)
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
     * @return \PayPal\StructType\AccountSummaryResponse
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
