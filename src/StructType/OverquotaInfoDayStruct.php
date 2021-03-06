<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for overquotaInfoDayStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OverquotaInfoDayStruct extends AbstractStructBase
{
    /**
     * The day
     * @var int
     */
    public $day;
    /**
     * The value
     * @var int
     */
    public $value;
    /**
     * Constructor method for overquotaInfoDayStruct
     * @uses OverquotaInfoDayStruct::setDay()
     * @uses OverquotaInfoDayStruct::setValue()
     * @param int $day
     * @param int $value
     */
    public function __construct($day = null, $value = null)
    {
        $this
            ->setDay($day)
            ->setValue($value);
    }
    /**
     * Get day value
     * @return int|null
     */
    public function getDay()
    {
        return $this->day;
    }
    /**
     * Set day value
     * @param int $day
     * @return \Ovh\StructType\OverquotaInfoDayStruct
     */
    public function setDay($day = null)
    {
        // validation for constraint: int
        if (!is_null($day) && !(is_int($day) || ctype_digit($day))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($day, true), gettype($day)), __LINE__);
        }
        $this->day = $day;
        return $this;
    }
    /**
     * Get value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param int $value
     * @return \Ovh\StructType\OverquotaInfoDayStruct
     */
    public function setValue($value = null)
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
