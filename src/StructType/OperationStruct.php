<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for operationStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OperationStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The function
     * @var string
     */
    public $function;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The internalStatus
     * @var string
     */
    public $internalStatus;
    /**
     * The comment
     * @var string
     */
    public $comment;
    /**
     * The users
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $users;
    /**
     * The retry
     * @var int
     */
    public $retry;
    /**
     * The todoDate
     * @var string
     */
    public $todoDate;
    /**
     * The lastUpdate
     * @var string
     */
    public $lastUpdate;
    /**
     * The doneDate
     * @var string
     */
    public $doneDate;
    /**
     * The canCancel
     * @var bool
     */
    public $canCancel;
    /**
     * The canCorrect
     * @var bool
     */
    public $canCorrect;
    /**
     * The canRelaunch
     * @var bool
     */
    public $canRelaunch;
    /**
     * The restartStep
     * @var string
     */
    public $restartStep;
    /**
     * Constructor method for operationStruct
     * @uses OperationStruct::setId()
     * @uses OperationStruct::setDomain()
     * @uses OperationStruct::setFunction()
     * @uses OperationStruct::setStatus()
     * @uses OperationStruct::setInternalStatus()
     * @uses OperationStruct::setComment()
     * @uses OperationStruct::setUsers()
     * @uses OperationStruct::setRetry()
     * @uses OperationStruct::setTodoDate()
     * @uses OperationStruct::setLastUpdate()
     * @uses OperationStruct::setDoneDate()
     * @uses OperationStruct::setCanCancel()
     * @uses OperationStruct::setCanCorrect()
     * @uses OperationStruct::setCanRelaunch()
     * @uses OperationStruct::setRestartStep()
     * @param int $id
     * @param string $domain
     * @param string $function
     * @param string $status
     * @param string $internalStatus
     * @param string $comment
     * @param \Ovh\ArrayType\MyArrayOfStringType $users
     * @param int $retry
     * @param string $todoDate
     * @param string $lastUpdate
     * @param string $doneDate
     * @param bool $canCancel
     * @param bool $canCorrect
     * @param bool $canRelaunch
     * @param string $restartStep
     */
    public function __construct($id = null, $domain = null, $function = null, $status = null, $internalStatus = null, $comment = null, \Ovh\ArrayType\MyArrayOfStringType $users = null, $retry = null, $todoDate = null, $lastUpdate = null, $doneDate = null, $canCancel = null, $canCorrect = null, $canRelaunch = null, $restartStep = null)
    {
        $this
            ->setId($id)
            ->setDomain($domain)
            ->setFunction($function)
            ->setStatus($status)
            ->setInternalStatus($internalStatus)
            ->setComment($comment)
            ->setUsers($users)
            ->setRetry($retry)
            ->setTodoDate($todoDate)
            ->setLastUpdate($lastUpdate)
            ->setDoneDate($doneDate)
            ->setCanCancel($canCancel)
            ->setCanCorrect($canCorrect)
            ->setCanRelaunch($canRelaunch)
            ->setRestartStep($restartStep);
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
     * @return \Ovh\StructType\OperationStruct
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
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\OperationStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get function value
     * @return string|null
     */
    public function getFunction()
    {
        return $this->function;
    }
    /**
     * Set function value
     * @param string $function
     * @return \Ovh\StructType\OperationStruct
     */
    public function setFunction($function = null)
    {
        // validation for constraint: string
        if (!is_null($function) && !is_string($function)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($function, true), gettype($function)), __LINE__);
        }
        $this->function = $function;
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
     * @return \Ovh\StructType\OperationStruct
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
     * Get internalStatus value
     * @return string|null
     */
    public function getInternalStatus()
    {
        return $this->internalStatus;
    }
    /**
     * Set internalStatus value
     * @param string $internalStatus
     * @return \Ovh\StructType\OperationStruct
     */
    public function setInternalStatus($internalStatus = null)
    {
        // validation for constraint: string
        if (!is_null($internalStatus) && !is_string($internalStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalStatus, true), gettype($internalStatus)), __LINE__);
        }
        $this->internalStatus = $internalStatus;
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
     * @return \Ovh\StructType\OperationStruct
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
     * Get users value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * Set users value
     * @param \Ovh\ArrayType\MyArrayOfStringType $users
     * @return \Ovh\StructType\OperationStruct
     */
    public function setUsers(\Ovh\ArrayType\MyArrayOfStringType $users = null)
    {
        $this->users = $users;
        return $this;
    }
    /**
     * Get retry value
     * @return int|null
     */
    public function getRetry()
    {
        return $this->retry;
    }
    /**
     * Set retry value
     * @param int $retry
     * @return \Ovh\StructType\OperationStruct
     */
    public function setRetry($retry = null)
    {
        // validation for constraint: int
        if (!is_null($retry) && !(is_int($retry) || ctype_digit($retry))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($retry, true), gettype($retry)), __LINE__);
        }
        $this->retry = $retry;
        return $this;
    }
    /**
     * Get todoDate value
     * @return string|null
     */
    public function getTodoDate()
    {
        return $this->todoDate;
    }
    /**
     * Set todoDate value
     * @param string $todoDate
     * @return \Ovh\StructType\OperationStruct
     */
    public function setTodoDate($todoDate = null)
    {
        // validation for constraint: string
        if (!is_null($todoDate) && !is_string($todoDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($todoDate, true), gettype($todoDate)), __LINE__);
        }
        $this->todoDate = $todoDate;
        return $this;
    }
    /**
     * Get lastUpdate value
     * @return string|null
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
    /**
     * Set lastUpdate value
     * @param string $lastUpdate
     * @return \Ovh\StructType\OperationStruct
     */
    public function setLastUpdate($lastUpdate = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdate, true), gettype($lastUpdate)), __LINE__);
        }
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
    /**
     * Get doneDate value
     * @return string|null
     */
    public function getDoneDate()
    {
        return $this->doneDate;
    }
    /**
     * Set doneDate value
     * @param string $doneDate
     * @return \Ovh\StructType\OperationStruct
     */
    public function setDoneDate($doneDate = null)
    {
        // validation for constraint: string
        if (!is_null($doneDate) && !is_string($doneDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($doneDate, true), gettype($doneDate)), __LINE__);
        }
        $this->doneDate = $doneDate;
        return $this;
    }
    /**
     * Get canCancel value
     * @return bool|null
     */
    public function getCanCancel()
    {
        return $this->canCancel;
    }
    /**
     * Set canCancel value
     * @param bool $canCancel
     * @return \Ovh\StructType\OperationStruct
     */
    public function setCanCancel($canCancel = null)
    {
        // validation for constraint: boolean
        if (!is_null($canCancel) && !is_bool($canCancel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canCancel, true), gettype($canCancel)), __LINE__);
        }
        $this->canCancel = $canCancel;
        return $this;
    }
    /**
     * Get canCorrect value
     * @return bool|null
     */
    public function getCanCorrect()
    {
        return $this->canCorrect;
    }
    /**
     * Set canCorrect value
     * @param bool $canCorrect
     * @return \Ovh\StructType\OperationStruct
     */
    public function setCanCorrect($canCorrect = null)
    {
        // validation for constraint: boolean
        if (!is_null($canCorrect) && !is_bool($canCorrect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canCorrect, true), gettype($canCorrect)), __LINE__);
        }
        $this->canCorrect = $canCorrect;
        return $this;
    }
    /**
     * Get canRelaunch value
     * @return bool|null
     */
    public function getCanRelaunch()
    {
        return $this->canRelaunch;
    }
    /**
     * Set canRelaunch value
     * @param bool $canRelaunch
     * @return \Ovh\StructType\OperationStruct
     */
    public function setCanRelaunch($canRelaunch = null)
    {
        // validation for constraint: boolean
        if (!is_null($canRelaunch) && !is_bool($canRelaunch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canRelaunch, true), gettype($canRelaunch)), __LINE__);
        }
        $this->canRelaunch = $canRelaunch;
        return $this;
    }
    /**
     * Get restartStep value
     * @return string|null
     */
    public function getRestartStep()
    {
        return $this->restartStep;
    }
    /**
     * Set restartStep value
     * @param string $restartStep
     * @return \Ovh\StructType\OperationStruct
     */
    public function setRestartStep($restartStep = null)
    {
        // validation for constraint: string
        if (!is_null($restartStep) && !is_string($restartStep)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restartStep, true), gettype($restartStep)), __LINE__);
        }
        $this->restartStep = $restartStep;
        return $this;
    }
}
