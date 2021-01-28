<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for automatedMailGetErrorsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutomatedMailGetErrorsStruct extends AbstractStructBase
{
    /**
     * The to
     * @var string
     */
    public $to;
    /**
     * The total
     * @var int
     */
    public $total;
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
     * Constructor method for automatedMailGetErrorsStruct
     * @uses AutomatedMailGetErrorsStruct::setTo()
     * @uses AutomatedMailGetErrorsStruct::setTotal()
     * @uses AutomatedMailGetErrorsStruct::setDate()
     * @uses AutomatedMailGetErrorsStruct::setMessage()
     * @param string $to
     * @param int $total
     * @param string $date
     * @param string $message
     */
    public function __construct($to = null, $total = null, $date = null, $message = null)
    {
        $this
            ->setTo($to)
            ->setTotal($total)
            ->setDate($date)
            ->setMessage($message);
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
     * @return \Ovh\StructType\AutomatedMailGetErrorsStruct
     */
    public function setTo($to = null)
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        return $this;
    }
    /**
     * Get total value
     * @return int|null
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param int $total
     * @return \Ovh\StructType\AutomatedMailGetErrorsStruct
     */
    public function setTotal($total = null)
    {
        // validation for constraint: int
        if (!is_null($total) && !(is_int($total) || ctype_digit($total))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->total = $total;
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
     * @return \Ovh\StructType\AutomatedMailGetErrorsStruct
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
     * @return \Ovh\StructType\AutomatedMailGetErrorsStruct
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
}
