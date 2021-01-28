<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType
     */
    public $ports;
    /**
     * Constructor method for rtmPortsIfaceStruct
     * @uses RtmPortsIfaceStruct::setIface()
     * @uses RtmPortsIfaceStruct::setPorts()
     * @param string $iface
     * @param \Ovh\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType $ports
     */
    public function __construct($iface = null, \Ovh\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType $ports = null)
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
     * @return \Ovh\StructType\RtmPortsIfaceStruct
     */
    public function setIface($iface = null)
    {
        // validation for constraint: string
        if (!is_null($iface) && !is_string($iface)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iface, true), gettype($iface)), __LINE__);
        }
        $this->iface = $iface;
        return $this;
    }
    /**
     * Get ports value
     * @return \Ovh\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType|null
     */
    public function getPorts()
    {
        return $this->ports;
    }
    /**
     * Set ports value
     * @param \Ovh\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType $ports
     * @return \Ovh\StructType\RtmPortsIfaceStruct
     */
    public function setPorts(\Ovh\ArrayType\MyArrayOfRtmPortsIfaceDetailStructType $ports = null)
    {
        $this->ports = $ports;
        return $this;
    }
}
