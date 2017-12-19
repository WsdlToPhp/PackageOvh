<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveCronStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveCronStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The active
     * @var string
     */
    public $active;
    /**
     * The days
     * @var string
     */
    public $days;
    /**
     * The hours
     * @var string
     */
    public $hours;
    /**
     * The operation
     * @var string
     */
    public $operation;
    /**
     * The endDate
     * @var string
     */
    public $endDate;
    /**
     * The comment
     * @var string
     */
    public $comment;
    /**
     * Constructor method for sqlpriveCronStruct
     * @uses SqlpriveCronStruct::setId()
     * @uses SqlpriveCronStruct::setActive()
     * @uses SqlpriveCronStruct::setDays()
     * @uses SqlpriveCronStruct::setHours()
     * @uses SqlpriveCronStruct::setOperation()
     * @uses SqlpriveCronStruct::setEndDate()
     * @uses SqlpriveCronStruct::setComment()
     * @param int $id
     * @param string $active
     * @param string $days
     * @param string $hours
     * @param string $operation
     * @param string $endDate
     * @param string $comment
     */
    public function __construct($id = null, $active = null, $days = null, $hours = null, $operation = null, $endDate = null, $comment = null)
    {
        $this
            ->setId($id)
            ->setActive($active)
            ->setDays($days)
            ->setHours($hours)
            ->setOperation($operation)
            ->setEndDate($endDate)
            ->setComment($comment);
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
     * @return \Ovh\StructType\SqlpriveCronStruct
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
     * Get active value
     * @return string|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param string $active
     * @return \Ovh\StructType\SqlpriveCronStruct
     */
    public function setActive($active = null)
    {
        // validation for constraint: string
        if (!is_null($active) && !is_string($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get days value
     * @return string|null
     */
    public function getDays()
    {
        return $this->days;
    }
    /**
     * Set days value
     * @param string $days
     * @return \Ovh\StructType\SqlpriveCronStruct
     */
    public function setDays($days = null)
    {
        // validation for constraint: string
        if (!is_null($days) && !is_string($days)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($days)), __LINE__);
        }
        $this->days = $days;
        return $this;
    }
    /**
     * Get hours value
     * @return string|null
     */
    public function getHours()
    {
        return $this->hours;
    }
    /**
     * Set hours value
     * @param string $hours
     * @return \Ovh\StructType\SqlpriveCronStruct
     */
    public function setHours($hours = null)
    {
        // validation for constraint: string
        if (!is_null($hours) && !is_string($hours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hours)), __LINE__);
        }
        $this->hours = $hours;
        return $this;
    }
    /**
     * Get operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->operation;
    }
    /**
     * Set operation value
     * @param string $operation
     * @return \Ovh\StructType\SqlpriveCronStruct
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->operation = $operation;
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Ovh\StructType\SqlpriveCronStruct
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Ovh\StructType\SqlpriveCronStruct
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\SqlpriveCronStruct
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
