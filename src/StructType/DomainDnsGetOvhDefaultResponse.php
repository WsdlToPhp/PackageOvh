<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainDnsGetOvhDefaultResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainDnsGetOvhDefaultResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfNsStructType
     */
    public $return;
    /**
     * Constructor method for domainDnsGetOvhDefaultResponse
     * @uses DomainDnsGetOvhDefaultResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfNsStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfNsStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfNsStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfNsStructType $return
     * @return \Ovh\StructType\DomainDnsGetOvhDefaultResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfNsStructType $return = null)
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
     * @return \Ovh\StructType\DomainDnsGetOvhDefaultResponse
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
