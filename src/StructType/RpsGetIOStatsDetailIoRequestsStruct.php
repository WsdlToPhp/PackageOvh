<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rpsGetIOStatsDetailIoRequestsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RpsGetIOStatsDetailIoRequestsStruct extends AbstractStructBase
{
    /**
     * The read
     * @var \PayPal\StructType\RpsGetIOStatsDetailRawStruct
     */
    public $read;
    /**
     * The write
     * @var \PayPal\StructType\RpsGetIOStatsDetailRawStruct
     */
    public $write;
    /**
     * Constructor method for rpsGetIOStatsDetailIoRequestsStruct
     * @uses RpsGetIOStatsDetailIoRequestsStruct::setRead()
     * @uses RpsGetIOStatsDetailIoRequestsStruct::setWrite()
     * @param \PayPal\StructType\RpsGetIOStatsDetailRawStruct $read
     * @param \PayPal\StructType\RpsGetIOStatsDetailRawStruct $write
     */
    public function __construct(\PayPal\StructType\RpsGetIOStatsDetailRawStruct $read = null, \PayPal\StructType\RpsGetIOStatsDetailRawStruct $write = null)
    {
        $this
            ->setRead($read)
            ->setWrite($write);
    }
    /**
     * Get read value
     * @return \PayPal\StructType\RpsGetIOStatsDetailRawStruct|null
     */
    public function getRead()
    {
        return $this->read;
    }
    /**
     * Set read value
     * @param \PayPal\StructType\RpsGetIOStatsDetailRawStruct $read
     * @return \PayPal\StructType\RpsGetIOStatsDetailIoRequestsStruct
     */
    public function setRead(\PayPal\StructType\RpsGetIOStatsDetailRawStruct $read = null)
    {
        $this->read = $read;
        return $this;
    }
    /**
     * Get write value
     * @return \PayPal\StructType\RpsGetIOStatsDetailRawStruct|null
     */
    public function getWrite()
    {
        return $this->write;
    }
    /**
     * Set write value
     * @param \PayPal\StructType\RpsGetIOStatsDetailRawStruct $write
     * @return \PayPal\StructType\RpsGetIOStatsDetailIoRequestsStruct
     */
    public function setWrite(\PayPal\StructType\RpsGetIOStatsDetailRawStruct $write = null)
    {
        $this->write = $write;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RpsGetIOStatsDetailIoRequestsStruct
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
