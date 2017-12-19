<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for messageDetailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MessageDetailStruct extends AbstractStructBase
{
    /**
     * The to
     * @var string
     */
    public $to;
    /**
     * The from
     * @var string
     */
    public $from;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The message
     * @var string
     */
    public $message;
    /**
     * Constructor method for messageDetailStruct
     * @uses MessageDetailStruct::setTo()
     * @uses MessageDetailStruct::setFrom()
     * @uses MessageDetailStruct::setDate()
     * @uses MessageDetailStruct::setIp()
     * @uses MessageDetailStruct::setType()
     * @uses MessageDetailStruct::setMessage()
     * @param string $to
     * @param string $from
     * @param string $date
     * @param string $ip
     * @param string $type
     * @param string $message
     */
    public function __construct($to = null, $from = null, $date = null, $ip = null, $type = null, $message = null)
    {
        $this
            ->setTo($to)
            ->setFrom($from)
            ->setDate($date)
            ->setIp($ip)
            ->setType($type)
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
     * @return \Ovh\StructType\MessageDetailStruct
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
     * @return \Ovh\StructType\MessageDetailStruct
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
     * @return \Ovh\StructType\MessageDetailStruct
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
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \Ovh\StructType\MessageDetailStruct
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\MessageDetailStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Ovh\StructType\MessageDetailStruct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\MessageDetailStruct
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
