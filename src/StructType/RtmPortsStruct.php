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
}
