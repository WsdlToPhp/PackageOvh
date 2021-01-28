<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyGetClosureEventsAsIcsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetClosureEventsAsIcsStruct extends AbstractStructBase
{
    /**
     * The numberOfEvents
     * @var int
     */
    public $numberOfEvents;
    /**
     * The datas
     * @var string
     */
    public $datas;
    /**
     * Constructor method for telephonyGetClosureEventsAsIcsStruct
     * @uses TelephonyGetClosureEventsAsIcsStruct::setNumberOfEvents()
     * @uses TelephonyGetClosureEventsAsIcsStruct::setDatas()
     * @param int $numberOfEvents
     * @param string $datas
     */
    public function __construct($numberOfEvents = null, $datas = null)
    {
        $this
            ->setNumberOfEvents($numberOfEvents)
            ->setDatas($datas);
    }
    /**
     * Get numberOfEvents value
     * @return int|null
     */
    public function getNumberOfEvents()
    {
        return $this->numberOfEvents;
    }
    /**
     * Set numberOfEvents value
     * @param int $numberOfEvents
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct
     */
    public function setNumberOfEvents($numberOfEvents = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfEvents) && !(is_int($numberOfEvents) || ctype_digit($numberOfEvents))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfEvents, true), gettype($numberOfEvents)), __LINE__);
        }
        $this->numberOfEvents = $numberOfEvents;
        return $this;
    }
    /**
     * Get datas value
     * @return string|null
     */
    public function getDatas()
    {
        return $this->datas;
    }
    /**
     * Set datas value
     * @param string $datas
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct
     */
    public function setDatas($datas = null)
    {
        // validation for constraint: string
        if (!is_null($datas) && !is_string($datas)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datas, true), gettype($datas)), __LINE__);
        }
        $this->datas = $datas;
        return $this;
    }
}
