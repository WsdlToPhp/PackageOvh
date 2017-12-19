<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsGetUserQuotaResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsGetUserQuotaResponse extends AbstractStructBase
{
    /**
     * The return
     * @var string
     */
    public $return;
    /**
     * Constructor method for telephonySmsGetUserQuotaResponse
     * @uses TelephonySmsGetUserQuotaResponse::setReturn()
     * @param string $return
     */
    public function __construct($return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return string|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param string $return
     * @return \PayPal\StructType\TelephonySmsGetUserQuotaResponse
     */
    public function setReturn($return = null)
    {
        // validation for constraint: string
        if (!is_null($return) && !is_string($return)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($return)), __LINE__);
        }
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsGetUserQuotaResponse
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
