<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidGetSummaryReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidGetSummaryReturn extends AbstractStructBase
{
    /**
     * The contract
     * @var string
     */
    public $contract;
    /**
     * The threshold
     * @var int
     */
    public $threshold;
    /**
     * The balance
     * @var float
     */
    public $balance;
    /**
     * The md5
     * @var string
     */
    public $md5;
    /**
     * Constructor method for prepaidGetSummaryReturn
     * @uses PrepaidGetSummaryReturn::setContract()
     * @uses PrepaidGetSummaryReturn::setThreshold()
     * @uses PrepaidGetSummaryReturn::setBalance()
     * @uses PrepaidGetSummaryReturn::setMd5()
     * @param string $contract
     * @param int $threshold
     * @param float $balance
     * @param string $md5
     */
    public function __construct($contract = null, $threshold = null, $balance = null, $md5 = null)
    {
        $this
            ->setContract($contract)
            ->setThreshold($threshold)
            ->setBalance($balance)
            ->setMd5($md5);
    }
    /**
     * Get contract value
     * @return string|null
     */
    public function getContract()
    {
        return $this->contract;
    }
    /**
     * Set contract value
     * @param string $contract
     * @return \PayPal\StructType\PrepaidGetSummaryReturn
     */
    public function setContract($contract = null)
    {
        // validation for constraint: string
        if (!is_null($contract) && !is_string($contract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contract)), __LINE__);
        }
        $this->contract = $contract;
        return $this;
    }
    /**
     * Get threshold value
     * @return int|null
     */
    public function getThreshold()
    {
        return $this->threshold;
    }
    /**
     * Set threshold value
     * @param int $threshold
     * @return \PayPal\StructType\PrepaidGetSummaryReturn
     */
    public function setThreshold($threshold = null)
    {
        // validation for constraint: int
        if (!is_null($threshold) && !is_numeric($threshold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($threshold)), __LINE__);
        }
        $this->threshold = $threshold;
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
     * @return \PayPal\StructType\PrepaidGetSummaryReturn
     */
    public function setBalance($balance = null)
    {
        $this->balance = $balance;
        return $this;
    }
    /**
     * Get md5 value
     * @return string|null
     */
    public function getMd5()
    {
        return $this->md5;
    }
    /**
     * Set md5 value
     * @param string $md5
     * @return \PayPal\StructType\PrepaidGetSummaryReturn
     */
    public function setMd5($md5 = null)
    {
        // validation for constraint: string
        if (!is_null($md5) && !is_string($md5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($md5)), __LINE__);
        }
        $this->md5 = $md5;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PrepaidGetSummaryReturn
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
