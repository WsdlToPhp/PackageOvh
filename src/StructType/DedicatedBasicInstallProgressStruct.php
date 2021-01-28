<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBasicInstallProgressStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBasicInstallProgressStruct extends AbstractStructBase
{
    /**
     * The step
     * @var int
     */
    public $step;
    /**
     * The comment
     * @var string
     */
    public $comment;
    /**
     * The time
     * @var string
     */
    public $time;
    /**
     * The error
     * @var string
     */
    public $error;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * Constructor method for dedicatedBasicInstallProgressStruct
     * @uses DedicatedBasicInstallProgressStruct::setStep()
     * @uses DedicatedBasicInstallProgressStruct::setComment()
     * @uses DedicatedBasicInstallProgressStruct::setTime()
     * @uses DedicatedBasicInstallProgressStruct::setError()
     * @uses DedicatedBasicInstallProgressStruct::setStatus()
     * @param int $step
     * @param string $comment
     * @param string $time
     * @param string $error
     * @param string $status
     */
    public function __construct($step = null, $comment = null, $time = null, $error = null, $status = null)
    {
        $this
            ->setStep($step)
            ->setComment($comment)
            ->setTime($time)
            ->setError($error)
            ->setStatus($status);
    }
    /**
     * Get step value
     * @return int|null
     */
    public function getStep()
    {
        return $this->step;
    }
    /**
     * Set step value
     * @param int $step
     * @return \Ovh\StructType\DedicatedBasicInstallProgressStruct
     */
    public function setStep($step = null)
    {
        // validation for constraint: int
        if (!is_null($step) && !(is_int($step) || ctype_digit($step))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($step, true), gettype($step)), __LINE__);
        }
        $this->step = $step;
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
     * @return \Ovh\StructType\DedicatedBasicInstallProgressStruct
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
    /**
     * Get time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $time
     * @return \Ovh\StructType\DedicatedBasicInstallProgressStruct
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;
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
     * @return \Ovh\StructType\DedicatedBasicInstallProgressStruct
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
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
     * @return \Ovh\StructType\DedicatedBasicInstallProgressStruct
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
