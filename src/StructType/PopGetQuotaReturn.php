<?php

namespace Ovh\StructType;

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
     * @return \Ovh\StructType\PopGetQuotaReturn
     */
    public function setEmailCount($emailCount = null)
    {
        // validation for constraint: int
        if (!is_null($emailCount) && !(is_int($emailCount) || ctype_digit($emailCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailCount, true), gettype($emailCount)), __LINE__);
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
     * @return \Ovh\StructType\PopGetQuotaReturn
     */
    public function setQuota($quota = null)
    {
        // validation for constraint: int
        if (!is_null($quota) && !(is_int($quota) || ctype_digit($quota))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quota, true), gettype($quota)), __LINE__);
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
     * @return \Ovh\StructType\PopGetQuotaReturn
     */
    public function setMaxQuota($maxQuota = null)
    {
        // validation for constraint: int
        if (!is_null($maxQuota) && !(is_int($maxQuota) || ctype_digit($maxQuota))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxQuota, true), gettype($maxQuota)), __LINE__);
        }
        $this->maxQuota = $maxQuota;
        return $this;
    }
}
