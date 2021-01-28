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
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($active, true), gettype($active)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($days, true), gettype($days)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hours, true), gettype($hours)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operation, true), gettype($operation)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
}
