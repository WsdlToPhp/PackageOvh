<?php

namespace PayPal\StructType;

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
     * @return \PayPal\StructType\DedicatedBackupFtpInfoReturn
     */
    public function setFtpBackupName($ftpBackupName = null)
    {
        // validation for constraint: string
        if (!is_null($ftpBackupName) && !is_string($ftpBackupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ftpBackupName)), __LINE__);
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
     * @return \PayPal\StructType\DedicatedBackupFtpInfoReturn
     */
    public function setQuotaUsed($quotaUsed = null)
    {
        // validation for constraint: int
        if (!is_null($quotaUsed) && !is_numeric($quotaUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quotaUsed)), __LINE__);
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
     * @return \PayPal\StructType\DedicatedBackupFtpInfoReturn
     */
    public function setQuotaSize($quotaSize = null)
    {
        // validation for constraint: int
        if (!is_null($quotaSize) && !is_numeric($quotaSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quotaSize)), __LINE__);
        }
        $this->quotaSize = $quotaSize;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedBackupFtpInfoReturn
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
