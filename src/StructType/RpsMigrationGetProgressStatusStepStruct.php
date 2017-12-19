<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rpsMigrationGetProgressStatusStepStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RpsMigrationGetProgressStatusStepStruct extends AbstractStructBase
{
    /**
     * The comment
     * @var string
     */
    public $comment;
    /**
     * The time
     * @var int
     */
    public $time;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The error
     * @var string
     */
    public $error;
    /**
     * Constructor method for rpsMigrationGetProgressStatusStepStruct
     * @uses RpsMigrationGetProgressStatusStepStruct::setComment()
     * @uses RpsMigrationGetProgressStatusStepStruct::setTime()
     * @uses RpsMigrationGetProgressStatusStepStruct::setStatus()
     * @uses RpsMigrationGetProgressStatusStepStruct::setError()
     * @param string $comment
     * @param int $time
     * @param string $status
     * @param string $error
     */
    public function __construct($comment = null, $time = null, $status = null, $error = null)
    {
        $this
            ->setComment($comment)
            ->setTime($time)
            ->setStatus($status)
            ->setError($error);
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
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct
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
     * Get time value
     * @return int|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param int $time
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public function setTime($time = null)
    {
        // validation for constraint: int
        if (!is_null($time) && !is_numeric($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($time)), __LINE__);
        }
        $this->time = $time;
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
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct
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
     * Get error value
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($error)), __LINE__);
        }
        $this->error = $error;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct
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
