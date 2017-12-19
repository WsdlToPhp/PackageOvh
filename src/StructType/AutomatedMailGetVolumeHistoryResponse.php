<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for automatedMailGetVolumeHistoryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutomatedMailGetVolumeHistoryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType
     */
    public $return;
    /**
     * Constructor method for automatedMailGetVolumeHistoryResponse
     * @uses AutomatedMailGetVolumeHistoryResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType $return
     * @return \PayPal\StructType\AutomatedMailGetVolumeHistoryResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType $return = null)
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
     * @return \PayPal\StructType\AutomatedMailGetVolumeHistoryResponse
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
