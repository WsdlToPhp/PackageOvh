<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsHistory StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsHistory extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The smsAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The smsId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $smsId;
    /**
     * The user
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $user;
    /**
     * The pagingStart
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pagingStart;
    /**
     * The pagingLimit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pagingLimit;
    /**
     * The sortField
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortField;
    /**
     * The sortOrder
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortOrder;
    /**
     * The tag
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tag;
    /**
     * The filter
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filter;
    /**
     * Constructor method for telephonySmsHistory
     * @uses TelephonySmsHistory::setSession()
     * @uses TelephonySmsHistory::setSmsAccount()
     * @uses TelephonySmsHistory::setSmsId()
     * @uses TelephonySmsHistory::setUser()
     * @uses TelephonySmsHistory::setPagingStart()
     * @uses TelephonySmsHistory::setPagingLimit()
     * @uses TelephonySmsHistory::setSortField()
     * @uses TelephonySmsHistory::setSortOrder()
     * @uses TelephonySmsHistory::setTag()
     * @uses TelephonySmsHistory::setFilter()
     * @param string $session
     * @param string $smsAccount
     * @param int $smsId
     * @param string $user
     * @param int $pagingStart
     * @param int $pagingLimit
     * @param string $sortField
     * @param string $sortOrder
     * @param string $tag
     * @param string $filter
     */
    public function __construct($session = null, $smsAccount = null, $smsId = null, $user = null, $pagingStart = null, $pagingLimit = null, $sortField = null, $sortOrder = null, $tag = null, $filter = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setSmsId($smsId)
            ->setUser($user)
            ->setPagingStart($pagingStart)
            ->setPagingLimit($pagingLimit)
            ->setSortField($sortField)
            ->setSortOrder($sortOrder)
            ->setTag($tag)
            ->setFilter($filter);
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
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get smsAccount value
     * @return string|null
     */
    public function getSmsAccount()
    {
        return $this->smsAccount;
    }
    /**
     * Set smsAccount value
     * @param string $smsAccount
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smsAccount)), __LINE__);
        }
        $this->smsAccount = $smsAccount;
        return $this;
    }
    /**
     * Get smsId value
     * @return int|null
     */
    public function getSmsId()
    {
        return $this->smsId;
    }
    /**
     * Set smsId value
     * @param int $smsId
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setSmsId($smsId = null)
    {
        // validation for constraint: int
        if (!is_null($smsId) && !is_numeric($smsId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smsId)), __LINE__);
        }
        $this->smsId = $smsId;
        return $this;
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($user)), __LINE__);
        }
        $this->user = $user;
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
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setPagingStart($pagingStart = null)
    {
        // validation for constraint: int
        if (!is_null($pagingStart) && !is_numeric($pagingStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pagingStart)), __LINE__);
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
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setPagingLimit($pagingLimit = null)
    {
        // validation for constraint: int
        if (!is_null($pagingLimit) && !is_numeric($pagingLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pagingLimit)), __LINE__);
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
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setSortField($sortField = null)
    {
        // validation for constraint: string
        if (!is_null($sortField) && !is_string($sortField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortField)), __LINE__);
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
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: string
        if (!is_null($sortOrder) && !is_string($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortOrder)), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get tag value
     * @return string|null
     */
    public function getTag()
    {
        return $this->tag;
    }
    /**
     * Set tag value
     * @param string $tag
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setTag($tag = null)
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tag)), __LINE__);
        }
        $this->tag = $tag;
        return $this;
    }
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \PayPal\StructType\TelephonySmsHistory
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsHistory
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
