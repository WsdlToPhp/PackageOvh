<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportGetFullMessageResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportGetFullMessageResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\SupportMessageDetailReturn
     */
    public $return;
    /**
     * Constructor method for supportGetFullMessageResponse
     * @uses SupportGetFullMessageResponse::setReturn()
     * @param \Ovh\StructType\SupportMessageDetailReturn $return
     */
    public function __construct(\Ovh\StructType\SupportMessageDetailReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\SupportMessageDetailReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\SupportMessageDetailReturn $return
     * @return \Ovh\StructType\SupportGetFullMessageResponse
     */
    public function setReturn(\Ovh\StructType\SupportMessageDetailReturn $return = null)
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
     * @return \Ovh\StructType\SupportGetFullMessageResponse
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
