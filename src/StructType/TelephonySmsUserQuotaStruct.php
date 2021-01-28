<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserQuotaStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserQuotaStruct extends AbstractStructBase
{
    /**
     * The quotaLeft
     * @var string
     */
    public $quotaLeft;
    /**
     * The quotaStatus
     * @var string
     */
    public $quotaStatus;
    /**
     * Constructor method for telephonySmsUserQuotaStruct
     * @uses TelephonySmsUserQuotaStruct::setQuotaLeft()
     * @uses TelephonySmsUserQuotaStruct::setQuotaStatus()
     * @param string $quotaLeft
     * @param string $quotaStatus
     */
    public function __construct($quotaLeft = null, $quotaStatus = null)
    {
        $this
            ->setQuotaLeft($quotaLeft)
            ->setQuotaStatus($quotaStatus);
    }
    /**
     * Get quotaLeft value
     * @return string|null
     */
    public function getQuotaLeft()
    {
        return $this->quotaLeft;
    }
    /**
     * Set quotaLeft value
     * @param string $quotaLeft
     * @return \Ovh\StructType\TelephonySmsUserQuotaStruct
     */
    public function setQuotaLeft($quotaLeft = null)
    {
        // validation for constraint: string
        if (!is_null($quotaLeft) && !is_string($quotaLeft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quotaLeft, true), gettype($quotaLeft)), __LINE__);
        }
        $this->quotaLeft = $quotaLeft;
        return $this;
    }
    /**
     * Get quotaStatus value
     * @return string|null
     */
    public function getQuotaStatus()
    {
        return $this->quotaStatus;
    }
    /**
     * Set quotaStatus value
     * @param string $quotaStatus
     * @return \Ovh\StructType\TelephonySmsUserQuotaStruct
     */
    public function setQuotaStatus($quotaStatus = null)
    {
        // validation for constraint: string
        if (!is_null($quotaStatus) && !is_string($quotaStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quotaStatus, true), gettype($quotaStatus)), __LINE__);
        }
        $this->quotaStatus = $quotaStatus;
        return $this;
    }
}
