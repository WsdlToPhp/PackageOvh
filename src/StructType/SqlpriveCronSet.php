<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveCronSet StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveCronSet extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The server
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $server;
    /**
     * The operation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $operation;
    /**
     * The recursivityDays
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $recursivityDays;
    /**
     * The recursivityHours
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $recursivityHours;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $endDate;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comment;
    /**
     * Constructor method for sqlpriveCronSet
     * @uses SqlpriveCronSet::setSession()
     * @uses SqlpriveCronSet::setServer()
     * @uses SqlpriveCronSet::setOperation()
     * @uses SqlpriveCronSet::setRecursivityDays()
     * @uses SqlpriveCronSet::setRecursivityHours()
     * @uses SqlpriveCronSet::setEndDate()
     * @uses SqlpriveCronSet::setComment()
     * @param string $session
     * @param string $server
     * @param string $operation
     * @param \Ovh\ArrayType\MyArrayOfStringType $recursivityDays
     * @param \Ovh\ArrayType\MyArrayOfStringType $recursivityHours
     * @param string $endDate
     * @param string $comment
     */
    public function __construct($session = null, $server = null, $operation = null, \Ovh\ArrayType\MyArrayOfStringType $recursivityDays = null, \Ovh\ArrayType\MyArrayOfStringType $recursivityHours = null, $endDate = null, $comment = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setOperation($operation)
            ->setRecursivityDays($recursivityDays)
            ->setRecursivityHours($recursivityHours)
            ->setEndDate($endDate)
            ->setComment($comment);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\SqlpriveCronSet
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get server value
     * @return string|null
     */
    public function getServer()
    {
        return $this->server;
    }
    /**
     * Set server value
     * @param string $server
     * @return \Ovh\StructType\SqlpriveCronSet
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($server, true), gettype($server)), __LINE__);
        }
        $this->server = $server;
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
     * @return \Ovh\StructType\SqlpriveCronSet
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
     * Get recursivityDays value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getRecursivityDays()
    {
        return $this->recursivityDays;
    }
    /**
     * Set recursivityDays value
     * @param \Ovh\ArrayType\MyArrayOfStringType $recursivityDays
     * @return \Ovh\StructType\SqlpriveCronSet
     */
    public function setRecursivityDays(\Ovh\ArrayType\MyArrayOfStringType $recursivityDays = null)
    {
        $this->recursivityDays = $recursivityDays;
        return $this;
    }
    /**
     * Get recursivityHours value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getRecursivityHours()
    {
        return $this->recursivityHours;
    }
    /**
     * Set recursivityHours value
     * @param \Ovh\ArrayType\MyArrayOfStringType $recursivityHours
     * @return \Ovh\StructType\SqlpriveCronSet
     */
    public function setRecursivityHours(\Ovh\ArrayType\MyArrayOfStringType $recursivityHours = null)
    {
        $this->recursivityHours = $recursivityHours;
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
     * @return \Ovh\StructType\SqlpriveCronSet
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
     * @return \Ovh\StructType\SqlpriveCronSet
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
