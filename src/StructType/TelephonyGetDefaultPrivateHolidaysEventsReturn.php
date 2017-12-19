<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyGetDefaultPrivateHolidaysEventsReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetDefaultPrivateHolidaysEventsReturn extends AbstractStructBase
{
    /**
     * The fr
     * @var \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $fr;
    /**
     * The be
     * @var \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $be;
    /**
     * The uk
     * @var \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $uk;
    /**
     * The de
     * @var \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $de;
    /**
     * The es
     * @var \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $es;
    /**
     * Constructor method for telephonyGetDefaultPrivateHolidaysEventsReturn
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setFr()
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setBe()
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setUk()
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setDe()
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setEs()
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $fr
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $be
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $uk
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $de
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $es
     */
    public function __construct(\PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $fr = null, \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $be = null, \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $uk = null, \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $de = null, \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $es = null)
    {
        $this
            ->setFr($fr)
            ->setBe($be)
            ->setUk($uk)
            ->setDe($de)
            ->setEs($es);
    }
    /**
     * Get fr value
     * @return \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getFr()
    {
        return $this->fr;
    }
    /**
     * Set fr value
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $fr
     * @return \PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setFr(\PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $fr = null)
    {
        $this->fr = $fr;
        return $this;
    }
    /**
     * Get be value
     * @return \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getBe()
    {
        return $this->be;
    }
    /**
     * Set be value
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $be
     * @return \PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setBe(\PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $be = null)
    {
        $this->be = $be;
        return $this;
    }
    /**
     * Get uk value
     * @return \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getUk()
    {
        return $this->uk;
    }
    /**
     * Set uk value
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $uk
     * @return \PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setUk(\PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $uk = null)
    {
        $this->uk = $uk;
        return $this;
    }
    /**
     * Get de value
     * @return \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getDe()
    {
        return $this->de;
    }
    /**
     * Set de value
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $de
     * @return \PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setDe(\PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $de = null)
    {
        $this->de = $de;
        return $this;
    }
    /**
     * Get es value
     * @return \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getEs()
    {
        return $this->es;
    }
    /**
     * Set es value
     * @param \PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $es
     * @return \PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setEs(\PayPal\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $es = null)
    {
        $this->es = $es;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
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
