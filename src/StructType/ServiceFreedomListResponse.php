<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceFreedomListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceFreedomListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfFreedomStructType
     */
    public $return;
    /**
     * Constructor method for serviceFreedomListResponse
     * @uses ServiceFreedomListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfFreedomStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfFreedomStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfFreedomStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfFreedomStructType $return
     * @return \Ovh\StructType\ServiceFreedomListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfFreedomStructType $return = null)
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
     * @return \Ovh\StructType\ServiceFreedomListResponse
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
