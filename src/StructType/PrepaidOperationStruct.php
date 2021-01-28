<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidOperationStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidOperationStruct extends AbstractStructBase
{
    /**
     * The balance_forward
     * @var float
     */
    public $balance_forward;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The nic
     * @var string
     */
    public $nic;
    /**
     * The account_name
     * @var string
     */
    public $account_name;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The amount
     * @var float
     */
    public $amount;
    /**
     * The balance
     * @var float
     */
    public $balance;
    /**
     * The order
     * @var int
     */
    public $order;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The operation
     * @var string
     */
    public $operation;
    /**
     * Constructor method for prepaidOperationStruct
     * @uses PrepaidOperationStruct::setBalance_forward()
     * @uses PrepaidOperationStruct::setDate()
     * @uses PrepaidOperationStruct::setNic()
     * @uses PrepaidOperationStruct::setAccount_name()
     * @uses PrepaidOperationStruct::setDescription()
     * @uses PrepaidOperationStruct::setAmount()
     * @uses PrepaidOperationStruct::setBalance()
     * @uses PrepaidOperationStruct::setOrder()
     * @uses PrepaidOperationStruct::setId()
     * @uses PrepaidOperationStruct::setOperation()
     * @param float $balance_forward
     * @param string $date
     * @param string $nic
     * @param string $account_name
     * @param string $description
     * @param float $amount
     * @param float $balance
     * @param int $order
     * @param int $id
     * @param string $operation
     */
    public function __construct($balance_forward = null, $date = null, $nic = null, $account_name = null, $description = null, $amount = null, $balance = null, $order = null, $id = null, $operation = null)
    {
        $this
            ->setBalance_forward($balance_forward)
            ->setDate($date)
            ->setNic($nic)
            ->setAccount_name($account_name)
            ->setDescription($description)
            ->setAmount($amount)
            ->setBalance($balance)
            ->setOrder($order)
            ->setId($id)
            ->setOperation($operation);
    }
    /**
     * Get balance_forward value
     * @return float|null
     */
    public function getBalance_forward()
    {
        return $this->balance_forward;
    }
    /**
     * Set balance_forward value
     * @param float $balance_forward
     * @return \Ovh\StructType\PrepaidOperationStruct
     */
    public function setBalance_forward($balance_forward = null)
    {
        // validation for constraint: float
        if (!is_null($balance_forward) && !(is_float($balance_forward) || is_numeric($balance_forward))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance_forward, true), gettype($balance_forward)), __LINE__);
        }
        $this->balance_forward = $balance_forward;
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
     * @return \Ovh\StructType\PrepaidOperationStruct
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
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \Ovh\StructType\PrepaidOperationStruct
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nic, true), gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
        return $this;
    }
    /**
     * Get account_name value
     * @return string|null
     */
    public function getAccount_name()
    {
        return $this->account_name;
    }
    /**
     * Set account_name value
     * @param string $account_name
     * @return \Ovh\StructType\PrepaidOperationStruct
     */
    public function setAccount_name($account_name = null)
    {
        // validation for constraint: string
        if (!is_null($account_name) && !is_string($account_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account_name, true), gettype($account_name)), __LINE__);
        }
        $this->account_name = $account_name;
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
     * @return \Ovh\StructType\PrepaidOperationStruct
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
     * Get amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Ovh\StructType\PrepaidOperationStruct
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get balance value
     * @return float|null
     */
    public function getBalance()
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param float $balance
     * @return \Ovh\StructType\PrepaidOperationStruct
     */
    public function setBalance($balance = null)
    {
        // validation for constraint: float
        if (!is_null($balance) && !(is_float($balance) || is_numeric($balance))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        $this->balance = $balance;
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
     * @return \Ovh\StructType\PrepaidOperationStruct
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
     * @return \Ovh\StructType\PrepaidOperationStruct
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
     * @return \Ovh\StructType\PrepaidOperationStruct
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
}
