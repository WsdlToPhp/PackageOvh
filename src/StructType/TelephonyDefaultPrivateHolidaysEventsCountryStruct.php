<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDefaultPrivateHolidaysEventsCountryStruct
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDefaultPrivateHolidaysEventsCountryStruct extends AbstractStructBase
{
    /**
     * The dates
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $dates;
    /**
     * The tzid
     * @var string
     */
    public $tzid;
    /**
     * Constructor method for telephonyDefaultPrivateHolidaysEventsCountryStruct
     * @uses TelephonyDefaultPrivateHolidaysEventsCountryStruct::setDates()
     * @uses TelephonyDefaultPrivateHolidaysEventsCountryStruct::setTzid()
     * @param \Ovh\ArrayType\MyArrayOfStringType $dates
     * @param string $tzid
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfStringType $dates = null, $tzid = null)
    {
        $this
            ->setDates($dates)
            ->setTzid($tzid);
    }
    /**
     * Get dates value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getDates()
    {
        return $this->dates;
    }
    /**
     * Set dates value
     * @param \Ovh\ArrayType\MyArrayOfStringType $dates
     * @return \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public function setDates(\Ovh\ArrayType\MyArrayOfStringType $dates = null)
    {
        $this->dates = $dates;
        return $this;
    }
    /**
     * Get tzid value
     * @return string|null
     */
    public function getTzid()
    {
        return $this->tzid;
    }
    /**
     * Set tzid value
     * @param string $tzid
     * @return \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public function setTzid($tzid = null)
    {
        // validation for constraint: string
        if (!is_null($tzid) && !is_string($tzid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tzid, true), gettype($tzid)), __LINE__);
        }
        $this->tzid = $tzid;
        return $this;
    }
}
