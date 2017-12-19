<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInstallConfigurationStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInstallConfigurationStruct extends AbstractStructBase
{
    /**
     * The pendingDate
     * @var string
     */
    public $pendingDate;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The stageId
     * @var int
     */
    public $stageId;
    /**
     * The serverName
     * @var string
     */
    public $serverName;
    /**
     * The parameters
     * @var \PayPal\StructType\DedicatedInstallConfigurationParametersStruct
     */
    public $parameters;
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
     * The error
     * @var string
     */
    public $error;
    /**
     * The action
     * @var string
     */
    public $action;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The doneDate
     * @var string
     */
    public $doneDate;
    /**
     * Constructor method for dedicatedInstallConfigurationStruct
     * @uses DedicatedInstallConfigurationStruct::setPendingDate()
     * @uses DedicatedInstallConfigurationStruct::setStatus()
     * @uses DedicatedInstallConfigurationStruct::setStageId()
     * @uses DedicatedInstallConfigurationStruct::setServerName()
     * @uses DedicatedInstallConfigurationStruct::setParameters()
     * @uses DedicatedInstallConfigurationStruct::setTodoDate()
     * @uses DedicatedInstallConfigurationStruct::setDoingDate()
     * @uses DedicatedInstallConfigurationStruct::setError()
     * @uses DedicatedInstallConfigurationStruct::setAction()
     * @uses DedicatedInstallConfigurationStruct::setId()
     * @uses DedicatedInstallConfigurationStruct::setDoneDate()
     * @param string $pendingDate
     * @param string $status
     * @param int $stageId
     * @param string $serverName
     * @param \PayPal\StructType\DedicatedInstallConfigurationParametersStruct $parameters
     * @param string $todoDate
     * @param string $doingDate
     * @param string $error
     * @param string $action
     * @param int $id
     * @param string $doneDate
     */
    public function __construct($pendingDate = null, $status = null, $stageId = null, $serverName = null, \PayPal\StructType\DedicatedInstallConfigurationParametersStruct $parameters = null, $todoDate = null, $doingDate = null, $error = null, $action = null, $id = null, $doneDate = null)
    {
        $this
            ->setPendingDate($pendingDate)
            ->setStatus($status)
            ->setStageId($stageId)
            ->setServerName($serverName)
            ->setParameters($parameters)
            ->setTodoDate($todoDate)
            ->setDoingDate($doingDate)
            ->setError($error)
            ->setAction($action)
            ->setId($id)
            ->setDoneDate($doneDate);
    }
    /**
     * Get pendingDate value
     * @return string|null
     */
    public function getPendingDate()
    {
        return $this->pendingDate;
    }
    /**
     * Set pendingDate value
     * @param string $pendingDate
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
     */
    public function setPendingDate($pendingDate = null)
    {
        // validation for constraint: string
        if (!is_null($pendingDate) && !is_string($pendingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pendingDate)), __LINE__);
        }
        $this->pendingDate = $pendingDate;
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
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
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
     * Get stageId value
     * @return int|null
     */
    public function getStageId()
    {
        return $this->stageId;
    }
    /**
     * Set stageId value
     * @param int $stageId
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
     */
    public function setStageId($stageId = null)
    {
        // validation for constraint: int
        if (!is_null($stageId) && !is_numeric($stageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($stageId)), __LINE__);
        }
        $this->stageId = $stageId;
        return $this;
    }
    /**
     * Get serverName value
     * @return string|null
     */
    public function getServerName()
    {
        return $this->serverName;
    }
    /**
     * Set serverName value
     * @param string $serverName
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
     */
    public function setServerName($serverName = null)
    {
        // validation for constraint: string
        if (!is_null($serverName) && !is_string($serverName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serverName)), __LINE__);
        }
        $this->serverName = $serverName;
        return $this;
    }
    /**
     * Get parameters value
     * @return \PayPal\StructType\DedicatedInstallConfigurationParametersStruct|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }
    /**
     * Set parameters value
     * @param \PayPal\StructType\DedicatedInstallConfigurationParametersStruct $parameters
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
     */
    public function setParameters(\PayPal\StructType\DedicatedInstallConfigurationParametersStruct $parameters = null)
    {
        $this->parameters = $parameters;
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
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
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
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
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
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
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
     * Get action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($action)), __LINE__);
        }
        $this->action = $action;
        return $this;
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
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
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
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedInstallConfigurationStruct
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
