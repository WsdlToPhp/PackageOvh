<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCampaignList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCampaignList extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The campaignStatus
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $campaignStatus;
    /**
     * The pagingStart
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pagingStart;
    /**
     * The pagingLimit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pagingLimit;
    /**
     * The sortField
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortField;
    /**
     * The sortOrder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortOrder;
    /**
     * Constructor method for telephonyFaxCampaignList
     * @uses TelephonyFaxCampaignList::setSession()
     * @uses TelephonyFaxCampaignList::setNumber()
     * @uses TelephonyFaxCampaignList::setCountry()
     * @uses TelephonyFaxCampaignList::setCampaignStatus()
     * @uses TelephonyFaxCampaignList::setPagingStart()
     * @uses TelephonyFaxCampaignList::setPagingLimit()
     * @uses TelephonyFaxCampaignList::setSortField()
     * @uses TelephonyFaxCampaignList::setSortOrder()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $campaignStatus
     * @param int $pagingStart
     * @param int $pagingLimit
     * @param string $sortField
     * @param string $sortOrder
     */
    public function __construct($session = null, $number = null, $country = null, $campaignStatus = null, $pagingStart = null, $pagingLimit = null, $sortField = null, $sortOrder = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setCampaignStatus($campaignStatus)
            ->setPagingStart($pagingStart)
            ->setPagingLimit($pagingLimit)
            ->setSortField($sortField)
            ->setSortOrder($sortOrder);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\TelephonyFaxCampaignList
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Ovh\StructType\TelephonyFaxCampaignList
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
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
     * @return \Ovh\StructType\TelephonyFaxCampaignList
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
     * @return \Ovh\StructType\TelephonyFaxCampaignList
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
     * Get pagingStart value
     * @return int|null
     */
    public function getPagingStart()
    {
        return $this->pagingStart;
    }
    /**
     * Set pagingStart value
     * @param int $pagingStart
     * @return \Ovh\StructType\TelephonyFaxCampaignList
     */
    public function setPagingStart($pagingStart = null)
    {
        // validation for constraint: int
        if (!is_null($pagingStart) && !(is_int($pagingStart) || ctype_digit($pagingStart))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pagingStart, true), gettype($pagingStart)), __LINE__);
        }
        $this->pagingStart = $pagingStart;
        return $this;
    }
    /**
     * Get pagingLimit value
     * @return int|null
     */
    public function getPagingLimit()
    {
        return $this->pagingLimit;
    }
    /**
     * Set pagingLimit value
     * @param int $pagingLimit
     * @return \Ovh\StructType\TelephonyFaxCampaignList
     */
    public function setPagingLimit($pagingLimit = null)
    {
        // validation for constraint: int
        if (!is_null($pagingLimit) && !(is_int($pagingLimit) || ctype_digit($pagingLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pagingLimit, true), gettype($pagingLimit)), __LINE__);
        }
        $this->pagingLimit = $pagingLimit;
        return $this;
    }
    /**
     * Get sortField value
     * @return string|null
     */
    public function getSortField()
    {
        return $this->sortField;
    }
    /**
     * Set sortField value
     * @param string $sortField
     * @return \Ovh\StructType\TelephonyFaxCampaignList
     */
    public function setSortField($sortField = null)
    {
        // validation for constraint: string
        if (!is_null($sortField) && !is_string($sortField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortField, true), gettype($sortField)), __LINE__);
        }
        $this->sortField = $sortField;
        return $this;
    }
    /**
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param string $sortOrder
     * @return \Ovh\StructType\TelephonyFaxCampaignList
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: string
        if (!is_null($sortOrder) && !is_string($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortOrder, true), gettype($sortOrder)), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        return $this;
    }
}
