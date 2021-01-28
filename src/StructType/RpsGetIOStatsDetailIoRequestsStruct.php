<?php

namespace Ovh\StructType;

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
     * @var \Ovh\StructType\RpsGetIOStatsDetailRawStruct
     */
    public $read;
    /**
     * The write
     * @var \Ovh\StructType\RpsGetIOStatsDetailRawStruct
     */
    public $write;
    /**
     * Constructor method for rpsGetIOStatsDetailIoRequestsStruct
     * @uses RpsGetIOStatsDetailIoRequestsStruct::setRead()
     * @uses RpsGetIOStatsDetailIoRequestsStruct::setWrite()
     * @param \Ovh\StructType\RpsGetIOStatsDetailRawStruct $read
     * @param \Ovh\StructType\RpsGetIOStatsDetailRawStruct $write
     */
    public function __construct(\Ovh\StructType\RpsGetIOStatsDetailRawStruct $read = null, \Ovh\StructType\RpsGetIOStatsDetailRawStruct $write = null)
    {
        $this
            ->setRead($read)
            ->setWrite($write);
    }
    /**
     * Get read value
     * @return \Ovh\StructType\RpsGetIOStatsDetailRawStruct|null
     */
    public function getRead()
    {
        return $this->read;
    }
    /**
     * Set read value
     * @param \Ovh\StructType\RpsGetIOStatsDetailRawStruct $read
     * @return \Ovh\StructType\RpsGetIOStatsDetailIoRequestsStruct
     */
    public function setRead(\Ovh\StructType\RpsGetIOStatsDetailRawStruct $read = null)
    {
        $this->read = $read;
        return $this;
    }
    /**
     * Get write value
     * @return \Ovh\StructType\RpsGetIOStatsDetailRawStruct|null
     */
    public function getWrite()
    {
        return $this->write;
    }
    /**
     * Set write value
     * @param \Ovh\StructType\RpsGetIOStatsDetailRawStruct $write
     * @return \Ovh\StructType\RpsGetIOStatsDetailIoRequestsStruct
     */
    public function setWrite(\Ovh\StructType\RpsGetIOStatsDetailRawStruct $write = null)
    {
        $this->write = $write;
        return $this;
    }
}
