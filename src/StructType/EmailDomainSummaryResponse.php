<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailDomainSummaryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailDomainSummaryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\EmailDomainSummaryReturn
     */
    public $return;
    /**
     * Constructor method for emailDomainSummaryResponse
     * @uses EmailDomainSummaryResponse::setReturn()
     * @param \PayPal\StructType\EmailDomainSummaryReturn $return
     */
    public function __construct(\PayPal\StructType\EmailDomainSummaryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\EmailDomainSummaryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\EmailDomainSummaryReturn $return
     * @return \PayPal\StructType\EmailDomainSummaryResponse
     */
    public function setReturn(\PayPal\StructType\EmailDomainSummaryReturn $return = null)
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
     * @return \PayPal\StructType\EmailDomainSummaryResponse
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
