<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyRecipientStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyRecipientStruct extends AbstractStructBase
{
    /**
     * The recipient
     * @var string
     */
    public $recipient;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * Constructor method for telephonyRecipientStruct
     * @uses TelephonyRecipientStruct::setRecipient()
     * @uses TelephonyRecipientStruct::setStatus()
     * @param string $recipient
     * @param string $status
     */
    public function __construct($recipient = null, $status = null)
    {
        $this
            ->setRecipient($recipient)
            ->setStatus($status);
    }
    /**
     * Get recipient value
     * @return string|null
     */
    public function getRecipient()
    {
        return $this->recipient;
    }
    /**
     * Set recipient value
     * @param string $recipient
     * @return \PayPal\StructType\TelephonyRecipientStruct
     */
    public function setRecipient($recipient = null)
    {
        // validation for constraint: string
        if (!is_null($recipient) && !is_string($recipient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipient)), __LINE__);
        }
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \PayPal\StructType\TelephonyRecipientStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyRecipientStruct
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