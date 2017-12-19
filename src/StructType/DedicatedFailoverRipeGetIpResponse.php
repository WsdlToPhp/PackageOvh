<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverRipeGetIpResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverRipeGetIpResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedFailoverRipeGetIpResponse
     * @uses DedicatedFailoverRipeGetIpResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return
     * @return \Ovh\StructType\DedicatedFailoverRipeGetIpResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return = null)
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
     * @return \Ovh\StructType\DedicatedFailoverRipeGetIpResponse
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
