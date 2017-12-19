<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusTicketsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusTicketsStruct extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The from
     * @var string
     */
    public $from;
    /**
     * The to
     * @var string
     */
    public $to;
    /**
     * The operator
     * @var string
     */
    public $operator;
    /**
     * The priceReversed
     * @var float
     */
    public $priceReversed;
    /**
     * The message
     * @var string
     */
    public $message;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * Constructor method for telephonySmsplusTicketsStruct
     * @uses TelephonySmsplusTicketsStruct::setId()
     * @uses TelephonySmsplusTicketsStruct::setDate()
     * @uses TelephonySmsplusTicketsStruct::setFrom()
     * @uses TelephonySmsplusTicketsStruct::setTo()
     * @uses TelephonySmsplusTicketsStruct::setOperator()
     * @uses TelephonySmsplusTicketsStruct::setPriceReversed()
     * @uses TelephonySmsplusTicketsStruct::setMessage()
     * @uses TelephonySmsplusTicketsStruct::setStatus()
     * @param string $id
     * @param string $date
     * @param string $from
     * @param string $to
     * @param string $operator
     * @param float $priceReversed
     * @param string $message
     * @param string $status
     */
    public function __construct($id = null, $date = null, $from = null, $to = null, $operator = null, $priceReversed = null, $message = null, $status = null)
    {
        $this
            ->setId($id)
            ->setDate($date)
            ->setFrom($from)
            ->setTo($to)
            ->setOperator($operator)
            ->setPriceReversed($priceReversed)
            ->setMessage($message)
            ->setStatus($status);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Ovh\StructType\TelephonySmsplusTicketsStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
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
     * @return \Ovh\StructType\TelephonySmsplusTicketsStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Ovh\StructType\TelephonySmsplusTicketsStruct
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from)), __LINE__);
        }
        $this->from = $from;
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo()
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Ovh\StructType\TelephonySmsplusTicketsStruct
     */
    public function setTo($to = null)
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to)), __LINE__);
        }
        $this->to = $to;
        return $this;
    }
    /**
     * Get operator value
     * @return string|null
     */
    public function getOperator()
    {
        return $this->operator;
    }
    /**
     * Set operator value
     * @param string $operator
     * @return \Ovh\StructType\TelephonySmsplusTicketsStruct
     */
    public function setOperator($operator = null)
    {
        // validation for constraint: string
        if (!is_null($operator) && !is_string($operator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operator)), __LINE__);
        }
        $this->operator = $operator;
        return $this;
    }
    /**
     * Get priceReversed value
     * @return float|null
     */
    public function getPriceReversed()
    {
        return $this->priceReversed;
    }
    /**
     * Set priceReversed value
     * @param float $priceReversed
     * @return \Ovh\StructType\TelephonySmsplusTicketsStruct
     */
    public function setPriceReversed($priceReversed = null)
    {
        $this->priceReversed = $priceReversed;
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
     * @return \Ovh\StructType\TelephonySmsplusTicketsStruct
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->message = $message;
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
     * @return \Ovh\StructType\TelephonySmsplusTicketsStruct
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
     * @return \Ovh\StructType\TelephonySmsplusTicketsStruct
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
