<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMessagesStatusReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMessagesStatusReturn extends AbstractStructBase
{
    /**
     * The unavailable
     * @var bool
     */
    public $unavailable;
    /**
     * The busy
     * @var bool
     */
    public $busy;
    /**
     * The temp
     * @var bool
     */
    public $temp;
    /**
     * The greet
     * @var bool
     */
    public $greet;
    /**
     * Constructor method for telephonyVoicemailMessagesStatusReturn
     * @uses TelephonyVoicemailMessagesStatusReturn::setUnavailable()
     * @uses TelephonyVoicemailMessagesStatusReturn::setBusy()
     * @uses TelephonyVoicemailMessagesStatusReturn::setTemp()
     * @uses TelephonyVoicemailMessagesStatusReturn::setGreet()
     * @param bool $unavailable
     * @param bool $busy
     * @param bool $temp
     * @param bool $greet
     */
    public function __construct($unavailable = null, $busy = null, $temp = null, $greet = null)
    {
        $this
            ->setUnavailable($unavailable)
            ->setBusy($busy)
            ->setTemp($temp)
            ->setGreet($greet);
    }
    /**
     * Get unavailable value
     * @return bool|null
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }
    /**
     * Set unavailable value
     * @param bool $unavailable
     * @return \Ovh\StructType\TelephonyVoicemailMessagesStatusReturn
     */
    public function setUnavailable($unavailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($unavailable) && !is_bool($unavailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unavailable, true), gettype($unavailable)), __LINE__);
        }
        $this->unavailable = $unavailable;
        return $this;
    }
    /**
     * Get busy value
     * @return bool|null
     */
    public function getBusy()
    {
        return $this->busy;
    }
    /**
     * Set busy value
     * @param bool $busy
     * @return \Ovh\StructType\TelephonyVoicemailMessagesStatusReturn
     */
    public function setBusy($busy = null)
    {
        // validation for constraint: boolean
        if (!is_null($busy) && !is_bool($busy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($busy, true), gettype($busy)), __LINE__);
        }
        $this->busy = $busy;
        return $this;
    }
    /**
     * Get temp value
     * @return bool|null
     */
    public function getTemp()
    {
        return $this->temp;
    }
    /**
     * Set temp value
     * @param bool $temp
     * @return \Ovh\StructType\TelephonyVoicemailMessagesStatusReturn
     */
    public function setTemp($temp = null)
    {
        // validation for constraint: boolean
        if (!is_null($temp) && !is_bool($temp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($temp, true), gettype($temp)), __LINE__);
        }
        $this->temp = $temp;
        return $this;
    }
    /**
     * Get greet value
     * @return bool|null
     */
    public function getGreet()
    {
        return $this->greet;
    }
    /**
     * Set greet value
     * @param bool $greet
     * @return \Ovh\StructType\TelephonyVoicemailMessagesStatusReturn
     */
    public function setGreet($greet = null)
    {
        // validation for constraint: boolean
        if (!is_null($greet) && !is_bool($greet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($greet, true), gettype($greet)), __LINE__);
        }
        $this->greet = $greet;
        return $this;
    }
}
