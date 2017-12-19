<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineLogsListStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineLogsListStruct extends AbstractStructBase
{
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The msg
     * @var string
     */
    public $msg;
    /**
     * Constructor method for telephonyLineLogsListStruct
     * @uses TelephonyLineLogsListStruct::setDate()
     * @uses TelephonyLineLogsListStruct::setType()
     * @uses TelephonyLineLogsListStruct::setMsg()
     * @param string $date
     * @param string $type
     * @param string $msg
     */
    public function __construct($date = null, $type = null, $msg = null)
    {
        $this
            ->setDate($date)
            ->setType($type)
            ->setMsg($msg);
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
     * @return \Ovh\StructType\TelephonyLineLogsListStruct
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
     * @return \Ovh\StructType\TelephonyLineLogsListStruct
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
     * Get msg value
     * @return string|null
     */
    public function getMsg()
    {
        return $this->msg;
    }
    /**
     * Set msg value
     * @param string $msg
     * @return \Ovh\StructType\TelephonyLineLogsListStruct
     */
    public function setMsg($msg = null)
    {
        // validation for constraint: string
        if (!is_null($msg) && !is_string($msg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msg)), __LINE__);
        }
        $this->msg = $msg;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyLineLogsListStruct
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
