<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountMovementStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccountMovementStruct extends AbstractStructBase
{
    /**
     * The amount
     * @var int
     */
    public $amount;
    /**
     * The balance
     * @var int
     */
    public $balance;
    /**
     * The previousBalance
     * @var int
     */
    public $previousBalance;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The operation
     * @var string
     */
    public $operation;
    /**
     * The order
     * @var int
     */
    public $order;
    /**
     * Constructor method for accountMovementStruct
     * @uses AccountMovementStruct::setAmount()
     * @uses AccountMovementStruct::setBalance()
     * @uses AccountMovementStruct::setPreviousBalance()
     * @uses AccountMovementStruct::setDate()
     * @uses AccountMovementStruct::setDescription()
     * @uses AccountMovementStruct::setOperation()
     * @uses AccountMovementStruct::setOrder()
     * @param int $amount
     * @param int $balance
     * @param int $previousBalance
     * @param string $date
     * @param string $description
     * @param string $operation
     * @param int $order
     */
    public function __construct($amount = null, $balance = null, $previousBalance = null, $date = null, $description = null, $operation = null, $order = null)
    {
        $this
            ->setAmount($amount)
            ->setBalance($balance)
            ->setPreviousBalance($previousBalance)
            ->setDate($date)
            ->setDescription($description)
            ->setOperation($operation)
            ->setOrder($order);
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \PayPal\StructType\AccountMovementStruct
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get balance value
     * @return int|null
     */
    public function getBalance()
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param int $balance
     * @return \PayPal\StructType\AccountMovementStruct
     */
    public function setBalance($balance = null)
    {
        // validation for constraint: int
        if (!is_null($balance) && !is_numeric($balance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($balance)), __LINE__);
        }
        $this->balance = $balance;
        return $this;
    }
    /**
     * Get previousBalance value
     * @return int|null
     */
    public function getPreviousBalance()
    {
        return $this->previousBalance;
    }
    /**
     * Set previousBalance value
     * @param int $previousBalance
     * @return \PayPal\StructType\AccountMovementStruct
     */
    public function setPreviousBalance($previousBalance = null)
    {
        // validation for constraint: int
        if (!is_null($previousBalance) && !is_numeric($previousBalance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($previousBalance)), __LINE__);
        }
        $this->previousBalance = $previousBalance;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \PayPal\StructType\AccountMovementStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \PayPal\StructType\AccountMovementStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
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
     * @return \PayPal\StructType\AccountMovementStruct
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->operation = $operation;
        return $this;
    }
    /**
     * Get order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \PayPal\StructType\AccountMovementStruct
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !is_numeric($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order)), __LINE__);
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AccountMovementStruct
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
