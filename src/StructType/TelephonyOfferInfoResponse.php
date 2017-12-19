<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyOfferInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyOfferInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\TelephonyOfferInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyOfferInfoResponse
     * @uses TelephonyOfferInfoResponse::setReturn()
     * @param \PayPal\StructType\TelephonyOfferInfoReturn $return
     */
    public function __construct(\PayPal\StructType\TelephonyOfferInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\TelephonyOfferInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\TelephonyOfferInfoReturn $return
     * @return \PayPal\StructType\TelephonyOfferInfoResponse
     */
    public function setReturn(\PayPal\StructType\TelephonyOfferInfoReturn $return = null)
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
     * @return \PayPal\StructType\TelephonyOfferInfoResponse
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
