<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineLogsNotificationOptionsReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineLogsNotificationOptionsReturn extends AbstractStructBase
{
    /**
     * The frequency
     * @var string
     */
    public $frequency;
    /**
     * The sendIfNull
     * @var bool
     */
    public $sendIfNull;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * Constructor method for telephonyLineLogsNotificationOptionsReturn
     * @uses TelephonyLineLogsNotificationOptionsReturn::setFrequency()
     * @uses TelephonyLineLogsNotificationOptionsReturn::setSendIfNull()
     * @uses TelephonyLineLogsNotificationOptionsReturn::setEmail()
     * @param string $frequency
     * @param bool $sendIfNull
     * @param string $email
     */
    public function __construct($frequency = null, $sendIfNull = null, $email = null)
    {
        $this
            ->setFrequency($frequency)
            ->setSendIfNull($sendIfNull)
            ->setEmail($email);
    }
    /**
     * Get frequency value
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->frequency;
    }
    /**
     * Set frequency value
     * @param string $frequency
     * @return \PayPal\StructType\TelephonyLineLogsNotificationOptionsReturn
     */
    public function setFrequency($frequency = null)
    {
        // validation for constraint: string
        if (!is_null($frequency) && !is_string($frequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequency)), __LINE__);
        }
        $this->frequency = $frequency;
        return $this;
    }
    /**
     * Get sendIfNull value
     * @return bool|null
     */
    public function getSendIfNull()
    {
        return $this->sendIfNull;
    }
    /**
     * Set sendIfNull value
     * @param bool $sendIfNull
     * @return \PayPal\StructType\TelephonyLineLogsNotificationOptionsReturn
     */
    public function setSendIfNull($sendIfNull = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendIfNull) && !is_bool($sendIfNull)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendIfNull)), __LINE__);
        }
        $this->sendIfNull = $sendIfNull;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \PayPal\StructType\TelephonyLineLogsNotificationOptionsReturn
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyLineLogsNotificationOptionsReturn
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
