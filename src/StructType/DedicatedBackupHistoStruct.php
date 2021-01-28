<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupHistoStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupHistoStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The backupId
     * @var int
     */
    public $backupId;
    /**
     * The dateTime
     * @var string
     */
    public $dateTime;
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
     * Constructor method for dedicatedBackupHistoStruct
     * @uses DedicatedBackupHistoStruct::setId()
     * @uses DedicatedBackupHistoStruct::setBackupId()
     * @uses DedicatedBackupHistoStruct::setDateTime()
     * @uses DedicatedBackupHistoStruct::setStatus()
     * @uses DedicatedBackupHistoStruct::setError()
     * @param int $id
     * @param int $backupId
     * @param string $dateTime
     * @param string $status
     * @param string $error
     */
    public function __construct($id = null, $backupId = null, $dateTime = null, $status = null, $error = null)
    {
        $this
            ->setId($id)
            ->setBackupId($backupId)
            ->setDateTime($dateTime)
            ->setStatus($status)
            ->setError($error);
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
     * @return \Ovh\StructType\DedicatedBackupHistoStruct
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
     * Get backupId value
     * @return int|null
     */
    public function getBackupId()
    {
        return $this->backupId;
    }
    /**
     * Set backupId value
     * @param int $backupId
     * @return \Ovh\StructType\DedicatedBackupHistoStruct
     */
    public function setBackupId($backupId = null)
    {
        // validation for constraint: int
        if (!is_null($backupId) && !(is_int($backupId) || ctype_digit($backupId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($backupId, true), gettype($backupId)), __LINE__);
        }
        $this->backupId = $backupId;
        return $this;
    }
    /**
     * Get dateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
    /**
     * Set dateTime value
     * @param string $dateTime
     * @return \Ovh\StructType\DedicatedBackupHistoStruct
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTime, true), gettype($dateTime)), __LINE__);
        }
        $this->dateTime = $dateTime;
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
     * @return \Ovh\StructType\DedicatedBackupHistoStruct
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
     * @return \Ovh\StructType\DedicatedBackupHistoStruct
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
}
