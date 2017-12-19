<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfStringType
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
     * @param \PayPal\ArrayType\MyArrayOfStringType $dates
     * @param string $tzid
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfStringType $dates = null, $tzid = null)
    {
        $this
            ->setDates($dates)
            ->setTzid($tzid);
    }
    /**
     * Get dates value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getDates()
    {
        return $this->dates;
    }
    /**
     * Set dates value
     * @param \PayPal\ArrayType\MyArrayOfStringType $dates
     * @return \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public function setDates(\PayPal\ArrayType\MyArrayOfStringType $dates = null)
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
     * @return \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public function setTzid($tzid = null)
    {
        // validation for constraint: string
        if (!is_null($tzid) && !is_string($tzid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tzid)), __LINE__);
        }
        $this->tzid = $tzid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
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
