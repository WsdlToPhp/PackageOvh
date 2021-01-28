<?php

namespace Ovh\StructType;

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
     * @var \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $fr;
    /**
     * The be
     * @var \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $be;
    /**
     * The uk
     * @var \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $uk;
    /**
     * The de
     * @var \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $de;
    /**
     * The es
     * @var \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct
     */
    public $es;
    /**
     * Constructor method for telephonyGetDefaultPrivateHolidaysEventsReturn
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setFr()
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setBe()
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setUk()
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setDe()
     * @uses TelephonyGetDefaultPrivateHolidaysEventsReturn::setEs()
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $fr
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $be
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $uk
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $de
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $es
     */
    public function __construct(\Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $fr = null, \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $be = null, \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $uk = null, \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $de = null, \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $es = null)
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
     * @return \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getFr()
    {
        return $this->fr;
    }
    /**
     * Set fr value
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $fr
     * @return \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setFr(\Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $fr = null)
    {
        $this->fr = $fr;
        return $this;
    }
    /**
     * Get be value
     * @return \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getBe()
    {
        return $this->be;
    }
    /**
     * Set be value
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $be
     * @return \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setBe(\Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $be = null)
    {
        $this->be = $be;
        return $this;
    }
    /**
     * Get uk value
     * @return \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getUk()
    {
        return $this->uk;
    }
    /**
     * Set uk value
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $uk
     * @return \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setUk(\Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $uk = null)
    {
        $this->uk = $uk;
        return $this;
    }
    /**
     * Get de value
     * @return \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getDe()
    {
        return $this->de;
    }
    /**
     * Set de value
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $de
     * @return \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setDe(\Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $de = null)
    {
        $this->de = $de;
        return $this;
    }
    /**
     * Get es value
     * @return \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct|null
     */
    public function getEs()
    {
        return $this->es;
    }
    /**
     * Set es value
     * @param \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $es
     * @return \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public function setEs(\Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsCountryStruct $es = null)
    {
        $this->es = $es;
        return $this;
    }
}
