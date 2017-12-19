<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidGetBalanceResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidGetBalanceResponse extends AbstractStructBase
{
    /**
     * The return
     * @var float
     */
    public $return;
    /**
     * Constructor method for prepaidGetBalanceResponse
     * @uses PrepaidGetBalanceResponse::setReturn()
     * @param float $return
     */
    public function __construct($return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return float|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param float $return
     * @return \PayPal\StructType\PrepaidGetBalanceResponse
     */
    public function setReturn($return = null)
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
     * @return \PayPal\StructType\PrepaidGetBalanceResponse
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
