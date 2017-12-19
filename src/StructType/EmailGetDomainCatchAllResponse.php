<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailGetDomainCatchAllResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailGetDomainCatchAllResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\CatchAllGetReturn
     */
    public $return;
    /**
     * Constructor method for emailGetDomainCatchAllResponse
     * @uses EmailGetDomainCatchAllResponse::setReturn()
     * @param \PayPal\StructType\CatchAllGetReturn $return
     */
    public function __construct(\PayPal\StructType\CatchAllGetReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\CatchAllGetReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\CatchAllGetReturn $return
     * @return \PayPal\StructType\EmailGetDomainCatchAllResponse
     */
    public function setReturn(\PayPal\StructType\CatchAllGetReturn $return = null)
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
     * @return \PayPal\StructType\EmailGetDomainCatchAllResponse
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
