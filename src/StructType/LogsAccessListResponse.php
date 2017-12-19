<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for logsAccessListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LogsAccessListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfLogsAccessStructType
     */
    public $return;
    /**
     * Constructor method for logsAccessListResponse
     * @uses LogsAccessListResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfLogsAccessStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfLogsAccessStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfLogsAccessStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfLogsAccessStructType $return
     * @return \PayPal\StructType\LogsAccessListResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfLogsAccessStructType $return = null)
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
     * @return \PayPal\StructType\LogsAccessListResponse
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
