<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for popGetQuotaReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PopGetQuotaReturn extends AbstractStructBase
{
    /**
     * The emailCount
     * @var int
     */
    public $emailCount;
    /**
     * The quota
     * @var int
     */
    public $quota;
    /**
     * The maxQuota
     * @var int
     */
    public $maxQuota;
    /**
     * Constructor method for popGetQuotaReturn
     * @uses PopGetQuotaReturn::setEmailCount()
     * @uses PopGetQuotaReturn::setQuota()
     * @uses PopGetQuotaReturn::setMaxQuota()
     * @param int $emailCount
     * @param int $quota
     * @param int $maxQuota
     */
    public function __construct($emailCount = null, $quota = null, $maxQuota = null)
    {
        $this
            ->setEmailCount($emailCount)
            ->setQuota($quota)
            ->setMaxQuota($maxQuota);
    }
    /**
     * Get emailCount value
     * @return int|null
     */
    public function getEmailCount()
    {
        return $this->emailCount;
    }
    /**
     * Set emailCount value
     * @param int $emailCount
     * @return \PayPal\StructType\PopGetQuotaReturn
     */
    public function setEmailCount($emailCount = null)
    {
        // validation for constraint: int
        if (!is_null($emailCount) && !is_numeric($emailCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($emailCount)), __LINE__);
        }
        $this->emailCount = $emailCount;
        return $this;
    }
    /**
     * Get quota value
     * @return int|null
     */
    public function getQuota()
    {
        return $this->quota;
    }
    /**
     * Set quota value
     * @param int $quota
     * @return \PayPal\StructType\PopGetQuotaReturn
     */
    public function setQuota($quota = null)
    {
        // validation for constraint: int
        if (!is_null($quota) && !is_numeric($quota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quota)), __LINE__);
        }
        $this->quota = $quota;
        return $this;
    }
    /**
     * Get maxQuota value
     * @return int|null
     */
    public function getMaxQuota()
    {
        return $this->maxQuota;
    }
    /**
     * Set maxQuota value
     * @param int $maxQuota
     * @return \PayPal\StructType\PopGetQuotaReturn
     */
    public function setMaxQuota($maxQuota = null)
    {
        // validation for constraint: int
        if (!is_null($maxQuota) && !is_numeric($maxQuota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxQuota)), __LINE__);
        }
        $this->maxQuota = $maxQuota;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PopGetQuotaReturn
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
