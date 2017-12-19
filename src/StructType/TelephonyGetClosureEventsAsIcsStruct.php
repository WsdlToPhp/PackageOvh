<?php

namespace PayPal\StructType;

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
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsIcsStruct
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
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsIcsStruct
     */
    public function setDatas($datas = null)
    {
        // validation for constraint: string
        if (!is_null($datas) && !is_string($datas)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datas)), __LINE__);
        }
        $this->datas = $datas;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsIcsStruct
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
