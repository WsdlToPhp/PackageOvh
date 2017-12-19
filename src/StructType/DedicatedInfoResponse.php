<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedInfoReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedInfoResponse
     * @uses DedicatedInfoResponse::setReturn()
     * @param \Ovh\StructType\DedicatedInfoReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedInfoReturn $return
     * @return \Ovh\StructType\DedicatedInfoResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedInfoReturn $return = null)
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
     * @return \Ovh\StructType\DedicatedInfoResponse
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
