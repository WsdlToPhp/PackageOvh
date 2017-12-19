<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nicPublicInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NicPublicInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\NicPublicInfoReturn
     */
    public $return;
    /**
     * Constructor method for nicPublicInfoResponse
     * @uses NicPublicInfoResponse::setReturn()
     * @param \PayPal\StructType\NicPublicInfoReturn $return
     */
    public function __construct(\PayPal\StructType\NicPublicInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\NicPublicInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\NicPublicInfoReturn $return
     * @return \PayPal\StructType\NicPublicInfoResponse
     */
    public function setReturn(\PayPal\StructType\NicPublicInfoReturn $return = null)
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
     * @return \PayPal\StructType\NicPublicInfoResponse
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
