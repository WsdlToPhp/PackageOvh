<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsHistoryStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsHistoryStruct extends AbstractStructBase
{
    /**
     * The smsId
     * @var int
     */
    public $smsId;
    /**
     * The numberFrom
     * @var string
     */
    public $numberFrom;
    /**
     * The numberTo
     * @var string
     */
    public $numberTo;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The message
     * @var string
     */
    public $message;
    /**
     * The text
     * @var string
     */
    public $text;
    /**
     * The user
     * @var string
     */
    public $user;
    /**
     * The tag
     * @var string
     */
    public $tag;
    /**
     * The pttDescription
     * @var string
     */
    public $pttDescription;
    /**
     * The deliveryReceiptDescription
     * @var string
     */
    public $deliveryReceiptDescription;
    /**
     * The pttDescriptionDetail
     * @var string
     */
    public $pttDescriptionDetail;
    /**
     * Constructor method for telephonySmsHistoryStruct
     * @uses TelephonySmsHistoryStruct::setSmsId()
     * @uses TelephonySmsHistoryStruct::setNumberFrom()
     * @uses TelephonySmsHistoryStruct::setNumberTo()
     * @uses TelephonySmsHistoryStruct::setStatus()
     * @uses TelephonySmsHistoryStruct::setDate()
     * @uses TelephonySmsHistoryStruct::setMessage()
     * @uses TelephonySmsHistoryStruct::setText()
     * @uses TelephonySmsHistoryStruct::setUser()
     * @uses TelephonySmsHistoryStruct::setTag()
     * @uses TelephonySmsHistoryStruct::setPttDescription()
     * @uses TelephonySmsHistoryStruct::setDeliveryReceiptDescription()
     * @uses TelephonySmsHistoryStruct::setPttDescriptionDetail()
     * @param int $smsId
     * @param string $numberFrom
     * @param string $numberTo
     * @param string $status
     * @param string $date
     * @param string $message
     * @param string $text
     * @param string $user
     * @param string $tag
     * @param string $pttDescription
     * @param string $deliveryReceiptDescription
     * @param string $pttDescriptionDetail
     */
    public function __construct($smsId = null, $numberFrom = null, $numberTo = null, $status = null, $date = null, $message = null, $text = null, $user = null, $tag = null, $pttDescription = null, $deliveryReceiptDescription = null, $pttDescriptionDetail = null)
    {
        $this
            ->setSmsId($smsId)
            ->setNumberFrom($numberFrom)
            ->setNumberTo($numberTo)
            ->setStatus($status)
            ->setDate($date)
            ->setMessage($message)
            ->setText($text)
            ->setUser($user)
            ->setTag($tag)
            ->setPttDescription($pttDescription)
            ->setDeliveryReceiptDescription($deliveryReceiptDescription)
            ->setPttDescriptionDetail($pttDescriptionDetail);
    }
    /**
     * Get smsId value
     * @return int|null
     */
    public function getSmsId()
    {
        return $this->smsId;
    }
    /**
     * Set smsId value
     * @param int $smsId
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setSmsId($smsId = null)
    {
        // validation for constraint: int
        if (!is_null($smsId) && !(is_int($smsId) || ctype_digit($smsId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($smsId, true), gettype($smsId)), __LINE__);
        }
        $this->smsId = $smsId;
        return $this;
    }
    /**
     * Get numberFrom value
     * @return string|null
     */
    public function getNumberFrom()
    {
        return $this->numberFrom;
    }
    /**
     * Set numberFrom value
     * @param string $numberFrom
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setNumberFrom($numberFrom = null)
    {
        // validation for constraint: string
        if (!is_null($numberFrom) && !is_string($numberFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberFrom, true), gettype($numberFrom)), __LINE__);
        }
        $this->numberFrom = $numberFrom;
        return $this;
    }
    /**
     * Get numberTo value
     * @return string|null
     */
    public function getNumberTo()
    {
        return $this->numberTo;
    }
    /**
     * Set numberTo value
     * @param string $numberTo
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setNumberTo($numberTo = null)
    {
        // validation for constraint: string
        if (!is_null($numberTo) && !is_string($numberTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberTo, true), gettype($numberTo)), __LINE__);
        }
        $this->numberTo = $numberTo;
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
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
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
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
        return $this;
    }
    /**
     * Get tag value
     * @return string|null
     */
    public function getTag()
    {
        return $this->tag;
    }
    /**
     * Set tag value
     * @param string $tag
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setTag($tag = null)
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tag, true), gettype($tag)), __LINE__);
        }
        $this->tag = $tag;
        return $this;
    }
    /**
     * Get pttDescription value
     * @return string|null
     */
    public function getPttDescription()
    {
        return $this->pttDescription;
    }
    /**
     * Set pttDescription value
     * @param string $pttDescription
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setPttDescription($pttDescription = null)
    {
        // validation for constraint: string
        if (!is_null($pttDescription) && !is_string($pttDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pttDescription, true), gettype($pttDescription)), __LINE__);
        }
        $this->pttDescription = $pttDescription;
        return $this;
    }
    /**
     * Get deliveryReceiptDescription value
     * @return string|null
     */
    public function getDeliveryReceiptDescription()
    {
        return $this->deliveryReceiptDescription;
    }
    /**
     * Set deliveryReceiptDescription value
     * @param string $deliveryReceiptDescription
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setDeliveryReceiptDescription($deliveryReceiptDescription = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryReceiptDescription) && !is_string($deliveryReceiptDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryReceiptDescription, true), gettype($deliveryReceiptDescription)), __LINE__);
        }
        $this->deliveryReceiptDescription = $deliveryReceiptDescription;
        return $this;
    }
    /**
     * Get pttDescriptionDetail value
     * @return string|null
     */
    public function getPttDescriptionDetail()
    {
        return $this->pttDescriptionDetail;
    }
    /**
     * Set pttDescriptionDetail value
     * @param string $pttDescriptionDetail
     * @return \Ovh\StructType\TelephonySmsHistoryStruct
     */
    public function setPttDescriptionDetail($pttDescriptionDetail = null)
    {
        // validation for constraint: string
        if (!is_null($pttDescriptionDetail) && !is_string($pttDescriptionDetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pttDescriptionDetail, true), gettype($pttDescriptionDetail)), __LINE__);
        }
        $this->pttDescriptionDetail = $pttDescriptionDetail;
        return $this;
    }
}
