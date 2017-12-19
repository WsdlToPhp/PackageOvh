<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rpsMigrationStatusReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RpsMigrationStatusReturn extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The progressStatus
     * @var int
     */
    public $progressStatus;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The logicalRpsName
     * @var string
     */
    public $logicalRpsName;
    /**
     * The physicalRpsTo
     * @var string
     */
    public $physicalRpsTo;
    /**
     * The todoDate
     * @var string
     */
    public $todoDate;
    /**
     * The doingDate
     * @var string
     */
    public $doingDate;
    /**
     * The doneDate
     * @var string
     */
    public $doneDate;
    /**
     * The errorMessage
     * @var string
     */
    public $errorMessage;
    /**
     * Constructor method for rpsMigrationStatusReturn
     * @uses RpsMigrationStatusReturn::setId()
     * @uses RpsMigrationStatusReturn::setProgressStatus()
     * @uses RpsMigrationStatusReturn::setStatus()
     * @uses RpsMigrationStatusReturn::setLogicalRpsName()
     * @uses RpsMigrationStatusReturn::setPhysicalRpsTo()
     * @uses RpsMigrationStatusReturn::setTodoDate()
     * @uses RpsMigrationStatusReturn::setDoingDate()
     * @uses RpsMigrationStatusReturn::setDoneDate()
     * @uses RpsMigrationStatusReturn::setErrorMessage()
     * @param int $id
     * @param int $progressStatus
     * @param string $status
     * @param string $logicalRpsName
     * @param string $physicalRpsTo
     * @param string $todoDate
     * @param string $doingDate
     * @param string $doneDate
     * @param string $errorMessage
     */
    public function __construct($id = null, $progressStatus = null, $status = null, $logicalRpsName = null, $physicalRpsTo = null, $todoDate = null, $doingDate = null, $doneDate = null, $errorMessage = null)
    {
        $this
            ->setId($id)
            ->setProgressStatus($progressStatus)
            ->setStatus($status)
            ->setLogicalRpsName($logicalRpsName)
            ->setPhysicalRpsTo($physicalRpsTo)
            ->setTodoDate($todoDate)
            ->setDoingDate($doingDate)
            ->setDoneDate($doneDate)
            ->setErrorMessage($errorMessage);
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
     * @return \PayPal\StructType\RpsMigrationStatusReturn
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
     * Get progressStatus value
     * @return int|null
     */
    public function getProgressStatus()
    {
        return $this->progressStatus;
    }
    /**
     * Set progressStatus value
     * @param int $progressStatus
     * @return \PayPal\StructType\RpsMigrationStatusReturn
     */
    public function setProgressStatus($progressStatus = null)
    {
        // validation for constraint: int
        if (!is_null($progressStatus) && !is_numeric($progressStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($progressStatus)), __LINE__);
        }
        $this->progressStatus = $progressStatus;
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
     * @return \PayPal\StructType\RpsMigrationStatusReturn
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
     * Get logicalRpsName value
     * @return string|null
     */
    public function getLogicalRpsName()
    {
        return $this->logicalRpsName;
    }
    /**
     * Set logicalRpsName value
     * @param string $logicalRpsName
     * @return \PayPal\StructType\RpsMigrationStatusReturn
     */
    public function setLogicalRpsName($logicalRpsName = null)
    {
        // validation for constraint: string
        if (!is_null($logicalRpsName) && !is_string($logicalRpsName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logicalRpsName)), __LINE__);
        }
        $this->logicalRpsName = $logicalRpsName;
        return $this;
    }
    /**
     * Get physicalRpsTo value
     * @return string|null
     */
    public function getPhysicalRpsTo()
    {
        return $this->physicalRpsTo;
    }
    /**
     * Set physicalRpsTo value
     * @param string $physicalRpsTo
     * @return \PayPal\StructType\RpsMigrationStatusReturn
     */
    public function setPhysicalRpsTo($physicalRpsTo = null)
    {
        // validation for constraint: string
        if (!is_null($physicalRpsTo) && !is_string($physicalRpsTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($physicalRpsTo)), __LINE__);
        }
        $this->physicalRpsTo = $physicalRpsTo;
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
     * @return \PayPal\StructType\RpsMigrationStatusReturn
     */
    public function setTodoDate($todoDate = null)
    {
        // validation for constraint: string
        if (!is_null($todoDate) && !is_string($todoDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($todoDate)), __LINE__);
        }
        $this->todoDate = $todoDate;
        return $this;
    }
    /**
     * Get doingDate value
     * @return string|null
     */
    public function getDoingDate()
    {
        return $this->doingDate;
    }
    /**
     * Set doingDate value
     * @param string $doingDate
     * @return \PayPal\StructType\RpsMigrationStatusReturn
     */
    public function setDoingDate($doingDate = null)
    {
        // validation for constraint: string
        if (!is_null($doingDate) && !is_string($doingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($doingDate)), __LINE__);
        }
        $this->doingDate = $doingDate;
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
     * @return \PayPal\StructType\RpsMigrationStatusReturn
     */
    public function setDoneDate($doneDate = null)
    {
        // validation for constraint: string
        if (!is_null($doneDate) && !is_string($doneDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($doneDate)), __LINE__);
        }
        $this->doneDate = $doneDate;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \PayPal\StructType\RpsMigrationStatusReturn
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RpsMigrationStatusReturn
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
