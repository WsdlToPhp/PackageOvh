<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for crontabInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CrontabInfoReturn extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The path
     * @var string
     */
    public $path;
    /**
     * The desc
     * @var string
     */
    public $desc;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The enabled
     * @var bool
     */
    public $enabled;
    /**
     * The programLanguage
     * @var string
     */
    public $programLanguage;
    /**
     * The weekDay
     * @var string
     */
    public $weekDay;
    /**
     * The days
     * @var \Ovh\ArrayType\MyArrayOfIntType
     */
    public $days;
    /**
     * The hours
     * @var \Ovh\ArrayType\MyArrayOfIntType
     */
    public $hours;
    /**
     * Constructor method for crontabInfoReturn
     * @uses CrontabInfoReturn::setId()
     * @uses CrontabInfoReturn::setPath()
     * @uses CrontabInfoReturn::setDesc()
     * @uses CrontabInfoReturn::setEmail()
     * @uses CrontabInfoReturn::setEnabled()
     * @uses CrontabInfoReturn::setProgramLanguage()
     * @uses CrontabInfoReturn::setWeekDay()
     * @uses CrontabInfoReturn::setDays()
     * @uses CrontabInfoReturn::setHours()
     * @param int $id
     * @param string $path
     * @param string $desc
     * @param string $email
     * @param bool $enabled
     * @param string $programLanguage
     * @param string $weekDay
     * @param \Ovh\ArrayType\MyArrayOfIntType $days
     * @param \Ovh\ArrayType\MyArrayOfIntType $hours
     */
    public function __construct($id = null, $path = null, $desc = null, $email = null, $enabled = null, $programLanguage = null, $weekDay = null, \Ovh\ArrayType\MyArrayOfIntType $days = null, \Ovh\ArrayType\MyArrayOfIntType $hours = null)
    {
        $this
            ->setId($id)
            ->setPath($path)
            ->setDesc($desc)
            ->setEmail($email)
            ->setEnabled($enabled)
            ->setProgramLanguage($programLanguage)
            ->setWeekDay($weekDay)
            ->setDays($days)
            ->setHours($hours);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\CrontabInfoReturn
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get path value
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * Set path value
     * @param string $path
     * @return \Ovh\StructType\CrontabInfoReturn
     */
    public function setPath($path = null)
    {
        // validation for constraint: string
        if (!is_null($path) && !is_string($path)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($path)), __LINE__);
        }
        $this->path = $path;
        return $this;
    }
    /**
     * Get desc value
     * @return string|null
     */
    public function getDesc()
    {
        return $this->desc;
    }
    /**
     * Set desc value
     * @param string $desc
     * @return \Ovh\StructType\CrontabInfoReturn
     */
    public function setDesc($desc = null)
    {
        // validation for constraint: string
        if (!is_null($desc) && !is_string($desc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($desc)), __LINE__);
        }
        $this->desc = $desc;
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
     * @return \Ovh\StructType\CrontabInfoReturn
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
     * Get enabled value
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
    /**
     * Set enabled value
     * @param bool $enabled
     * @return \Ovh\StructType\CrontabInfoReturn
     */
    public function setEnabled($enabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($enabled) && !is_bool($enabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enabled)), __LINE__);
        }
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Get programLanguage value
     * @return string|null
     */
    public function getProgramLanguage()
    {
        return $this->programLanguage;
    }
    /**
     * Set programLanguage value
     * @param string $programLanguage
     * @return \Ovh\StructType\CrontabInfoReturn
     */
    public function setProgramLanguage($programLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($programLanguage) && !is_string($programLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programLanguage)), __LINE__);
        }
        $this->programLanguage = $programLanguage;
        return $this;
    }
    /**
     * Get weekDay value
     * @return string|null
     */
    public function getWeekDay()
    {
        return $this->weekDay;
    }
    /**
     * Set weekDay value
     * @param string $weekDay
     * @return \Ovh\StructType\CrontabInfoReturn
     */
    public function setWeekDay($weekDay = null)
    {
        // validation for constraint: string
        if (!is_null($weekDay) && !is_string($weekDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($weekDay)), __LINE__);
        }
        $this->weekDay = $weekDay;
        return $this;
    }
    /**
     * Get days value
     * @return \Ovh\ArrayType\MyArrayOfIntType|null
     */
    public function getDays()
    {
        return $this->days;
    }
    /**
     * Set days value
     * @param \Ovh\ArrayType\MyArrayOfIntType $days
     * @return \Ovh\StructType\CrontabInfoReturn
     */
    public function setDays(\Ovh\ArrayType\MyArrayOfIntType $days = null)
    {
        $this->days = $days;
        return $this;
    }
    /**
     * Get hours value
     * @return \Ovh\ArrayType\MyArrayOfIntType|null
     */
    public function getHours()
    {
        return $this->hours;
    }
    /**
     * Set hours value
     * @param \Ovh\ArrayType\MyArrayOfIntType $hours
     * @return \Ovh\StructType\CrontabInfoReturn
     */
    public function setHours(\Ovh\ArrayType\MyArrayOfIntType $hours = null)
    {
        $this->hours = $hours;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\CrontabInfoReturn
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
