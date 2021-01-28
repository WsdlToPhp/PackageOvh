<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resellerAccountMovementStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResellerAccountMovementStruct extends AbstractStructBase
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
     * Constructor method for resellerAccountMovementStruct
     * @uses ResellerAccountMovementStruct::setAmount()
     * @uses ResellerAccountMovementStruct::setBalance()
     * @uses ResellerAccountMovementStruct::setPreviousBalance()
     * @uses ResellerAccountMovementStruct::setDate()
     * @uses ResellerAccountMovementStruct::setDescription()
     * @uses ResellerAccountMovementStruct::setOperation()
     * @uses ResellerAccountMovementStruct::setOrder()
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
     * @return \Ovh\StructType\ResellerAccountMovementStruct
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !(is_int($amount) || ctype_digit($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
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
     * @return \Ovh\StructType\ResellerAccountMovementStruct
     */
    public function setBalance($balance = null)
    {
        // validation for constraint: int
        if (!is_null($balance) && !(is_int($balance) || ctype_digit($balance))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
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
     * @return \Ovh\StructType\ResellerAccountMovementStruct
     */
    public function setPreviousBalance($previousBalance = null)
    {
        // validation for constraint: int
        if (!is_null($previousBalance) && !(is_int($previousBalance) || ctype_digit($previousBalance))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($previousBalance, true), gettype($previousBalance)), __LINE__);
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
     * @return \Ovh\StructType\ResellerAccountMovementStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
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
     * @return \Ovh\StructType\ResellerAccountMovementStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
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
     * @return \Ovh\StructType\ResellerAccountMovementStruct
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
     * @return \Ovh\StructType\ResellerAccountMovementStruct
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
        return $this;
    }
}
