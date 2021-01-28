<?php

namespace Ovh\StructType;

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
     * @var \Ovh\StructType\RpsGetIOStatsDetailRawStruct
     */
    public $serviceTime;
    /**
     * The IoRequests
     * @var \Ovh\StructType\RpsGetIOStatsDetailIoRequestsStruct
     */
    public $IoRequests;
    /**
     * Constructor method for rpsGetIOStatsDetailStruct
     * @uses RpsGetIOStatsDetailStruct::setServiceTime()
     * @uses RpsGetIOStatsDetailStruct::setIoRequests()
     * @param \Ovh\StructType\RpsGetIOStatsDetailRawStruct $serviceTime
     * @param \Ovh\StructType\RpsGetIOStatsDetailIoRequestsStruct $ioRequests
     */
    public function __construct(\Ovh\StructType\RpsGetIOStatsDetailRawStruct $serviceTime = null, \Ovh\StructType\RpsGetIOStatsDetailIoRequestsStruct $ioRequests = null)
    {
        $this
            ->setServiceTime($serviceTime)
            ->setIoRequests($ioRequests);
    }
    /**
     * Get serviceTime value
     * @return \Ovh\StructType\RpsGetIOStatsDetailRawStruct|null
     */
    public function getServiceTime()
    {
        return $this->serviceTime;
    }
    /**
     * Set serviceTime value
     * @param \Ovh\StructType\RpsGetIOStatsDetailRawStruct $serviceTime
     * @return \Ovh\StructType\RpsGetIOStatsDetailStruct
     */
    public function setServiceTime(\Ovh\StructType\RpsGetIOStatsDetailRawStruct $serviceTime = null)
    {
        $this->serviceTime = $serviceTime;
        return $this;
    }
    /**
     * Get IoRequests value
     * @return \Ovh\StructType\RpsGetIOStatsDetailIoRequestsStruct|null
     */
    public function getIoRequests()
    {
        return $this->IoRequests;
    }
    /**
     * Set IoRequests value
     * @param \Ovh\StructType\RpsGetIOStatsDetailIoRequestsStruct $ioRequests
     * @return \Ovh\StructType\RpsGetIOStatsDetailStruct
     */
    public function setIoRequests(\Ovh\StructType\RpsGetIOStatsDetailIoRequestsStruct $ioRequests = null)
    {
        $this->IoRequests = $ioRequests;
        return $this;
    }
}
