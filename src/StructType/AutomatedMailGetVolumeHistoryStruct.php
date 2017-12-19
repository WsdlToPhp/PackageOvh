<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for automatedMailGetVolumeHistoryStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutomatedMailGetVolumeHistoryStruct extends AbstractStructBase
{
    /**
     * The volume
     * @var int
     */
    public $volume;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * Constructor method for automatedMailGetVolumeHistoryStruct
     * @uses AutomatedMailGetVolumeHistoryStruct::setVolume()
     * @uses AutomatedMailGetVolumeHistoryStruct::setDate()
     * @param int $volume
     * @param string $date
     */
    public function __construct($volume = null, $date = null)
    {
        $this
            ->setVolume($volume)
            ->setDate($date);
    }
    /**
     * Get volume value
     * @return int|null
     */
    public function getVolume()
    {
        return $this->volume;
    }
    /**
     * Set volume value
     * @param int $volume
     * @return \Ovh\StructType\AutomatedMailGetVolumeHistoryStruct
     */
    public function setVolume($volume = null)
    {
        // validation for constraint: int
        if (!is_null($volume) && !is_numeric($volume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($volume)), __LINE__);
        }
        $this->volume = $volume;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Ovh\StructType\AutomatedMailGetVolumeHistoryStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\AutomatedMailGetVolumeHistoryStruct
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
