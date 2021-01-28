<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCampaignStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCampaignStruct extends AbstractStructBase
{
    /**
     * The campaignName
     * @var string
     */
    public $campaignName;
    /**
     * The campaignStatus
     * @var string
     */
    public $campaignStatus;
    /**
     * The dateStart
     * @var string
     */
    public $dateStart;
    /**
     * The dateEnd
     * @var string
     */
    public $dateEnd;
    /**
     * The total
     * @var int
     */
    public $total;
    /**
     * The success
     * @var int
     */
    public $success;
    /**
     * The failed
     * @var int
     */
    public $failed;
    /**
     * The reference
     * @var string
     */
    public $reference;
    /**
     * Constructor method for telephonyFaxCampaignStruct
     * @uses TelephonyFaxCampaignStruct::setCampaignName()
     * @uses TelephonyFaxCampaignStruct::setCampaignStatus()
     * @uses TelephonyFaxCampaignStruct::setDateStart()
     * @uses TelephonyFaxCampaignStruct::setDateEnd()
     * @uses TelephonyFaxCampaignStruct::setTotal()
     * @uses TelephonyFaxCampaignStruct::setSuccess()
     * @uses TelephonyFaxCampaignStruct::setFailed()
     * @uses TelephonyFaxCampaignStruct::setReference()
     * @param string $campaignName
     * @param string $campaignStatus
     * @param string $dateStart
     * @param string $dateEnd
     * @param int $total
     * @param int $success
     * @param int $failed
     * @param string $reference
     */
    public function __construct($campaignName = null, $campaignStatus = null, $dateStart = null, $dateEnd = null, $total = null, $success = null, $failed = null, $reference = null)
    {
        $this
            ->setCampaignName($campaignName)
            ->setCampaignStatus($campaignStatus)
            ->setDateStart($dateStart)
            ->setDateEnd($dateEnd)
            ->setTotal($total)
            ->setSuccess($success)
            ->setFailed($failed)
            ->setReference($reference);
    }
    /**
     * Get campaignName value
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }
    /**
     * Set campaignName value
     * @param string $campaignName
     * @return \Ovh\StructType\TelephonyFaxCampaignStruct
     */
    public function setCampaignName($campaignName = null)
    {
        // validation for constraint: string
        if (!is_null($campaignName) && !is_string($campaignName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignName, true), gettype($campaignName)), __LINE__);
        }
        $this->campaignName = $campaignName;
        return $this;
    }
    /**
     * Get campaignStatus value
     * @return string|null
     */
    public function getCampaignStatus()
    {
        return $this->campaignStatus;
    }
    /**
     * Set campaignStatus value
     * @param string $campaignStatus
     * @return \Ovh\StructType\TelephonyFaxCampaignStruct
     */
    public function setCampaignStatus($campaignStatus = null)
    {
        // validation for constraint: string
        if (!is_null($campaignStatus) && !is_string($campaignStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignStatus, true), gettype($campaignStatus)), __LINE__);
        }
        $this->campaignStatus = $campaignStatus;
        return $this;
    }
    /**
     * Get dateStart value
     * @return string|null
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }
    /**
     * Set dateStart value
     * @param string $dateStart
     * @return \Ovh\StructType\TelephonyFaxCampaignStruct
     */
    public function setDateStart($dateStart = null)
    {
        // validation for constraint: string
        if (!is_null($dateStart) && !is_string($dateStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateStart, true), gettype($dateStart)), __LINE__);
        }
        $this->dateStart = $dateStart;
        return $this;
    }
    /**
     * Get dateEnd value
     * @return string|null
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
    /**
     * Set dateEnd value
     * @param string $dateEnd
     * @return \Ovh\StructType\TelephonyFaxCampaignStruct
     */
    public function setDateEnd($dateEnd = null)
    {
        // validation for constraint: string
        if (!is_null($dateEnd) && !is_string($dateEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEnd, true), gettype($dateEnd)), __LINE__);
        }
        $this->dateEnd = $dateEnd;
        return $this;
    }
    /**
     * Get total value
     * @return int|null
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param int $total
     * @return \Ovh\StructType\TelephonyFaxCampaignStruct
     */
    public function setTotal($total = null)
    {
        // validation for constraint: int
        if (!is_null($total) && !(is_int($total) || ctype_digit($total))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->total = $total;
        return $this;
    }
    /**
     * Get success value
     * @return int|null
     */
    public function getSuccess()
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param int $success
     * @return \Ovh\StructType\TelephonyFaxCampaignStruct
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: int
        if (!is_null($success) && !(is_int($success) || ctype_digit($success))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        return $this;
    }
    /**
     * Get failed value
     * @return int|null
     */
    public function getFailed()
    {
        return $this->failed;
    }
    /**
     * Set failed value
     * @param int $failed
     * @return \Ovh\StructType\TelephonyFaxCampaignStruct
     */
    public function setFailed($failed = null)
    {
        // validation for constraint: int
        if (!is_null($failed) && !(is_int($failed) || ctype_digit($failed))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($failed, true), gettype($failed)), __LINE__);
        }
        $this->failed = $failed;
        return $this;
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \Ovh\StructType\TelephonyFaxCampaignStruct
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
}
