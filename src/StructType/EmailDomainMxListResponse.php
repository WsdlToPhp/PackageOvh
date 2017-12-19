<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailDomainMxListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailDomainMxListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfZoneStructType
     */
    public $return;
    /**
     * Constructor method for emailDomainMxListResponse
     * @uses EmailDomainMxListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfZoneStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfZoneStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfZoneStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfZoneStructType $return
     * @return \Ovh\StructType\EmailDomainMxListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfZoneStructType $return = null)
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
     * @return \Ovh\StructType\EmailDomainMxListResponse
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
