<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infrastructureIpListGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InfrastructureIpListGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfInfrastructureIpStructType
     */
    public $return;
    /**
     * Constructor method for infrastructureIpListGetResponse
     * @uses InfrastructureIpListGetResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfInfrastructureIpStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfInfrastructureIpStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfInfrastructureIpStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfInfrastructureIpStructType $return
     * @return \Ovh\StructType\InfrastructureIpListGetResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfInfrastructureIpStructType $return = null)
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
     * @return \Ovh\StructType\InfrastructureIpListGetResponse
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
