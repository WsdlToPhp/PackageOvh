<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rpsGetIOStatsDetailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RpsGetIOStatsDetailStruct extends AbstractStructBase
{
    /**
     * The serviceTime
     * @var \PayPal\StructType\RpsGetIOStatsDetailRawStruct
     */
    public $serviceTime;
    /**
     * The IoRequests
     * @var \PayPal\StructType\RpsGetIOStatsDetailIoRequestsStruct
     */
    public $IoRequests;
    /**
     * Constructor method for rpsGetIOStatsDetailStruct
     * @uses RpsGetIOStatsDetailStruct::setServiceTime()
     * @uses RpsGetIOStatsDetailStruct::setIoRequests()
     * @param \PayPal\StructType\RpsGetIOStatsDetailRawStruct $serviceTime
     * @param \PayPal\StructType\RpsGetIOStatsDetailIoRequestsStruct $ioRequests
     */
    public function __construct(\PayPal\StructType\RpsGetIOStatsDetailRawStruct $serviceTime = null, \PayPal\StructType\RpsGetIOStatsDetailIoRequestsStruct $ioRequests = null)
    {
        $this
            ->setServiceTime($serviceTime)
            ->setIoRequests($ioRequests);
    }
    /**
     * Get serviceTime value
     * @return \PayPal\StructType\RpsGetIOStatsDetailRawStruct|null
     */
    public function getServiceTime()
    {
        return $this->serviceTime;
    }
    /**
     * Set serviceTime value
     * @param \PayPal\StructType\RpsGetIOStatsDetailRawStruct $serviceTime
     * @return \PayPal\StructType\RpsGetIOStatsDetailStruct
     */
    public function setServiceTime(\PayPal\StructType\RpsGetIOStatsDetailRawStruct $serviceTime = null)
    {
        $this->serviceTime = $serviceTime;
        return $this;
    }
    /**
     * Get IoRequests value
     * @return \PayPal\StructType\RpsGetIOStatsDetailIoRequestsStruct|null
     */
    public function getIoRequests()
    {
        return $this->IoRequests;
    }
    /**
     * Set IoRequests value
     * @param \PayPal\StructType\RpsGetIOStatsDetailIoRequestsStruct $ioRequests
     * @return \PayPal\StructType\RpsGetIOStatsDetailStruct
     */
    public function setIoRequests(\PayPal\StructType\RpsGetIOStatsDetailIoRequestsStruct $ioRequests = null)
    {
        $this->IoRequests = $ioRequests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RpsGetIOStatsDetailStruct
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
