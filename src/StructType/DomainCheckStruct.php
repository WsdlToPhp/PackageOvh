<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainCheckStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainCheckStruct extends AbstractStructBase
{
    /**
     * The predicate
     * @var string
     */
    public $predicate;
    /**
     * The value
     * @var bool
     */
    public $value;
    /**
     * The reason
     * @var string
     */
    public $reason;
    /**
     * Constructor method for domainCheckStruct
     * @uses DomainCheckStruct::setPredicate()
     * @uses DomainCheckStruct::setValue()
     * @uses DomainCheckStruct::setReason()
     * @param string $predicate
     * @param bool $value
     * @param string $reason
     */
    public function __construct($predicate = null, $value = null, $reason = null)
    {
        $this
            ->setPredicate($predicate)
            ->setValue($value)
            ->setReason($reason);
    }
    /**
     * Get predicate value
     * @return string|null
     */
    public function getPredicate()
    {
        return $this->predicate;
    }
    /**
     * Set predicate value
     * @param string $predicate
     * @return \Ovh\StructType\DomainCheckStruct
     */
    public function setPredicate($predicate = null)
    {
        // validation for constraint: string
        if (!is_null($predicate) && !is_string($predicate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($predicate, true), gettype($predicate)), __LINE__);
        }
        $this->predicate = $predicate;
        return $this;
    }
    /**
     * Get value value
     * @return bool|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param bool $value
     * @return \Ovh\StructType\DomainCheckStruct
     */
    public function setValue($value = null)
    {
        // validation for constraint: boolean
        if (!is_null($value) && !is_bool($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \Ovh\StructType\DomainCheckStruct
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        return $this;
    }
}
