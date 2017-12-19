<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmPortsIfaceStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmPortsIfaceStruct extends AbstractStructBase
{
    /**
     * The iface
     * @var string
     */
    public $iface;
    /**
     * The ports
     * @var \PayPal\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType
     */
    public $ports;
    /**
     * Constructor method for rtmPortsIfaceStruct
     * @uses RtmPortsIfaceStruct::setIface()
     * @uses RtmPortsIfaceStruct::setPorts()
     * @param string $iface
     * @param \PayPal\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType $ports
     */
    public function __construct($iface = null, \PayPal\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType $ports = null)
    {
        $this
            ->setIface($iface)
            ->setPorts($ports);
    }
    /**
     * Get iface value
     * @return string|null
     */
    public function getIface()
    {
        return $this->iface;
    }
    /**
     * Set iface value
     * @param string $iface
     * @return \PayPal\StructType\RtmPortsIfaceStruct
     */
    public function setIface($iface = null)
    {
        // validation for constraint: string
        if (!is_null($iface) && !is_string($iface)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iface)), __LINE__);
        }
        $this->iface = $iface;
        return $this;
    }
    /**
     * Get ports value
     * @return \PayPal\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType|null
     */
    public function getPorts()
    {
        return $this->ports;
    }
    /**
     * Set ports value
     * @param \PayPal\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType $ports
     * @return \PayPal\StructType\RtmPortsIfaceStruct
     */
    public function setPorts(\PayPal\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType $ports = null)
    {
        $this->ports = $ports;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RtmPortsIfaceStruct
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
