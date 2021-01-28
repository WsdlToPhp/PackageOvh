<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resellerAccountSummaryReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResellerAccountSummaryReturn extends AbstractStructBase
{
    /**
     * The nic
     * @var string
     */
    public $nic;
    /**
     * The account
     * @var string
     */
    public $account;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The balance
     * @var int
     */
    public $balance;
    /**
     * The alertThreshold
     * @var int
     */
    public $alertThreshold;
    /**
     * The limitThreshold
     * @var int
     */
    public $limitThreshold;
    /**
     * The openDate
     * @var string
     */
    public $openDate;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The closeDate
     * @var string
     */
    public $closeDate;
    /**
     * Constructor method for resellerAccountSummaryReturn
     * @uses ResellerAccountSummaryReturn::setNic()
     * @uses ResellerAccountSummaryReturn::setAccount()
     * @uses ResellerAccountSummaryReturn::setCountry()
     * @uses ResellerAccountSummaryReturn::setDescription()
     * @uses ResellerAccountSummaryReturn::setBalance()
     * @uses ResellerAccountSummaryReturn::setAlertThreshold()
     * @uses ResellerAccountSummaryReturn::setLimitThreshold()
     * @uses ResellerAccountSummaryReturn::setOpenDate()
     * @uses ResellerAccountSummaryReturn::setDate()
     * @uses ResellerAccountSummaryReturn::setCloseDate()
     * @param string $nic
     * @param string $account
     * @param string $country
     * @param string $description
     * @param int $balance
     * @param int $alertThreshold
     * @param int $limitThreshold
     * @param string $openDate
     * @param string $date
     * @param string $closeDate
     */
    public function __construct($nic = null, $account = null, $country = null, $description = null, $balance = null, $alertThreshold = null, $limitThreshold = null, $openDate = null, $date = null, $closeDate = null)
    {
        $this
            ->setNic($nic)
            ->setAccount($account)
            ->setCountry($country)
            ->setDescription($description)
            ->setBalance($balance)
            ->setAlertThreshold($alertThreshold)
            ->setLimitThreshold($limitThreshold)
            ->setOpenDate($openDate)
            ->setDate($date)
            ->setCloseDate($closeDate);
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
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
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
     * Get account value
     * @return string|null
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
     */
    public function setAccount($account = null)
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
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
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
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
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
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
     * Get alertThreshold value
     * @return int|null
     */
    public function getAlertThreshold()
    {
        return $this->alertThreshold;
    }
    /**
     * Set alertThreshold value
     * @param int $alertThreshold
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
     */
    public function setAlertThreshold($alertThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($alertThreshold) && !(is_int($alertThreshold) || ctype_digit($alertThreshold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($alertThreshold, true), gettype($alertThreshold)), __LINE__);
        }
        $this->alertThreshold = $alertThreshold;
        return $this;
    }
    /**
     * Get limitThreshold value
     * @return int|null
     */
    public function getLimitThreshold()
    {
        return $this->limitThreshold;
    }
    /**
     * Set limitThreshold value
     * @param int $limitThreshold
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
     */
    public function setLimitThreshold($limitThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($limitThreshold) && !(is_int($limitThreshold) || ctype_digit($limitThreshold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limitThreshold, true), gettype($limitThreshold)), __LINE__);
        }
        $this->limitThreshold = $limitThreshold;
        return $this;
    }
    /**
     * Get openDate value
     * @return string|null
     */
    public function getOpenDate()
    {
        return $this->openDate;
    }
    /**
     * Set openDate value
     * @param string $openDate
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
     */
    public function setOpenDate($openDate = null)
    {
        // validation for constraint: string
        if (!is_null($openDate) && !is_string($openDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($openDate, true), gettype($openDate)), __LINE__);
        }
        $this->openDate = $openDate;
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
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
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
     * Get closeDate value
     * @return string|null
     */
    public function getCloseDate()
    {
        return $this->closeDate;
    }
    /**
     * Set closeDate value
     * @param string $closeDate
     * @return \Ovh\StructType\ResellerAccountSummaryReturn
     */
    public function setCloseDate($closeDate = null)
    {
        // validation for constraint: string
        if (!is_null($closeDate) && !is_string($closeDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closeDate, true), gettype($closeDate)), __LINE__);
        }
        $this->closeDate = $closeDate;
        return $this;
    }
}
