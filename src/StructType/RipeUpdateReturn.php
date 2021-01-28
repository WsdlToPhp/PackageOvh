<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ripeUpdateReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RipeUpdateReturn extends AbstractStructBase
{
    /**
     * The object
     * @var string
     */
    public $object;
    /**
     * The value
     * @var string
     */
    public $value;
    /**
     * The operation
     * @var string
     */
    public $operation;
    /**
     * The result
     * @var string
     */
    public $result;
    /**
     * Constructor method for ripeUpdateReturn
     * @uses RipeUpdateReturn::setObject()
     * @uses RipeUpdateReturn::setValue()
     * @uses RipeUpdateReturn::setOperation()
     * @uses RipeUpdateReturn::setResult()
     * @param string $object
     * @param string $value
     * @param string $operation
     * @param string $result
     */
    public function __construct($object = null, $value = null, $operation = null, $result = null)
    {
        $this
            ->setObject($object)
            ->setValue($value)
            ->setOperation($operation)
            ->setResult($result);
    }
    /**
     * Get object value
     * @return string|null
     */
    public function getObject()
    {
        return $this->object;
    }
    /**
     * Set object value
     * @param string $object
     * @return \Ovh\StructType\RipeUpdateReturn
     */
    public function setObject($object = null)
    {
        // validation for constraint: string
        if (!is_null($object) && !is_string($object)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($object, true), gettype($object)), __LINE__);
        }
        $this->object = $object;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Ovh\StructType\RipeUpdateReturn
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
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
     * @return \Ovh\StructType\RipeUpdateReturn
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
     * Get result value
     * @return string|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param string $result
     * @return \Ovh\StructType\RipeUpdateReturn
     */
    public function setResult($result = null)
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        return $this;
    }
}
