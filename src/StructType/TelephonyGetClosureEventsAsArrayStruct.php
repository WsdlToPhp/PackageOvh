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
        if (!is_null($numberOfEvents) && !is_numeric($numberOfEvents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfEvents)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct
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
