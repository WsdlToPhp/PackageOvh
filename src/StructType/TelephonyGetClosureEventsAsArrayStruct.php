<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyGetClosureEventsAsArrayStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetClosureEventsAsArrayStruct extends AbstractStructBase
{
    /**
     * The numberOfEvents
     * @var int
     */
    public $numberOfEvents;
    /**
     * The events
     * @var \Ovh\ArrayType\MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType
     */
    public $events;
    /**
     * Constructor method for telephonyGetClosureEventsAsArrayStruct
     * @uses TelephonyGetClosureEventsAsArrayStruct::setNumberOfEvents()
     * @uses TelephonyGetClosureEventsAsArrayStruct::setEvents()
     * @param int $numberOfEvents
     * @param \Ovh\ArrayType\MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType $events
     */
    public function __construct($numberOfEvents = null, \Ovh\ArrayType\MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType $events = null)
    {
        $this
            ->setNumberOfEvents($numberOfEvents)
            ->setEvents($events);
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
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct
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
     * Get events value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType|null
     */
    public function getEvents()
    {
        return $this->events;
    }
    /**
     * Set events value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType $events
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct
     */
    public function setEvents(\Ovh\ArrayType\MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType $events = null)
    {
        $this->events = $events;
        return $this;
    }
}
