<?php

namespace Ovh\StructType;

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
     * @return \Ovh\StructType\TelephonyRecipientStruct
     */
    public function setRecipient($recipient = null)
    {
        // validation for constraint: string
        if (!is_null($recipient) && !is_string($recipient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipient, true), gettype($recipient)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyRecipientStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
}
