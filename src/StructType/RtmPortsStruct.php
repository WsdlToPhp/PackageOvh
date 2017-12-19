<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmPortsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmPortsStruct extends AbstractStructBase
{
    /**
     * The listening
     * @var \Ovh\ArrayType\MyArrayOfRtmPortsIfaceStructType
     */
    public $listening;
    /**
     * Constructor method for rtmPortsStruct
     * @uses RtmPortsStruct::setListening()
     * @param \Ovh\ArrayType\MyArrayOfRtmPortsIfaceStructType $listening
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfRtmPortsIfaceStructType $listening = null)
    {
        $this
            ->setListening($listening);
    }
    /**
     * Get listening value
     * @return \Ovh\ArrayType\MyArrayOfRtmPortsIfaceStructType|null
     */
    public function getListening()
    {
        return $this->listening;
    }
    /**
     * Set listening value
     * @param \Ovh\ArrayType\MyArrayOfRtmPortsIfaceStructType $listening
     * @return \Ovh\StructType\RtmPortsStruct
     */
    public function setListening(\Ovh\ArrayType\MyArrayOfRtmPortsIfaceStructType $listening = null)
    {
        $this->listening = $listening;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RtmPortsStruct
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
