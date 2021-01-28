<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupFtpInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupFtpInfoReturn extends AbstractStructBase
{
    /**
     * The ftpBackupName
     * @var string
     */
    public $ftpBackupName;
    /**
     * The quotaUsed
     * @var int
     */
    public $quotaUsed;
    /**
     * The quotaSize
     * @var int
     */
    public $quotaSize;
    /**
     * Constructor method for dedicatedBackupFtpInfoReturn
     * @uses DedicatedBackupFtpInfoReturn::setFtpBackupName()
     * @uses DedicatedBackupFtpInfoReturn::setQuotaUsed()
     * @uses DedicatedBackupFtpInfoReturn::setQuotaSize()
     * @param string $ftpBackupName
     * @param int $quotaUsed
     * @param int $quotaSize
     */
    public function __construct($ftpBackupName = null, $quotaUsed = null, $quotaSize = null)
    {
        $this
            ->setFtpBackupName($ftpBackupName)
            ->setQuotaUsed($quotaUsed)
            ->setQuotaSize($quotaSize);
    }
    /**
     * Get ftpBackupName value
     * @return string|null
     */
    public function getFtpBackupName()
    {
        return $this->ftpBackupName;
    }
    /**
     * Set ftpBackupName value
     * @param string $ftpBackupName
     * @return \Ovh\StructType\DedicatedBackupFtpInfoReturn
     */
    public function setFtpBackupName($ftpBackupName = null)
    {
        // validation for constraint: string
        if (!is_null($ftpBackupName) && !is_string($ftpBackupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ftpBackupName, true), gettype($ftpBackupName)), __LINE__);
        }
        $this->ftpBackupName = $ftpBackupName;
        return $this;
    }
    /**
     * Get quotaUsed value
     * @return int|null
     */
    public function getQuotaUsed()
    {
        return $this->quotaUsed;
    }
    /**
     * Set quotaUsed value
     * @param int $quotaUsed
     * @return \Ovh\StructType\DedicatedBackupFtpInfoReturn
     */
    public function setQuotaUsed($quotaUsed = null)
    {
        // validation for constraint: int
        if (!is_null($quotaUsed) && !(is_int($quotaUsed) || ctype_digit($quotaUsed))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quotaUsed, true), gettype($quotaUsed)), __LINE__);
        }
        $this->quotaUsed = $quotaUsed;
        return $this;
    }
    /**
     * Get quotaSize value
     * @return int|null
     */
    public function getQuotaSize()
    {
        return $this->quotaSize;
    }
    /**
     * Set quotaSize value
     * @param int $quotaSize
     * @return \Ovh\StructType\DedicatedBackupFtpInfoReturn
     */
    public function setQuotaSize($quotaSize = null)
    {
        // validation for constraint: int
        if (!is_null($quotaSize) && !(is_int($quotaSize) || ctype_digit($quotaSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quotaSize, true), gettype($quotaSize)), __LINE__);
        }
        $this->quotaSize = $quotaSize;
        return $this;
    }
}
