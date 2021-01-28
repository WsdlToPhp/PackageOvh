<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsHistoryCsv StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsHistoryCsv extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The smsAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The smsId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $smsId;
    /**
     * The user
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $user;
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
     * The tag
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tag;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filter;
    /**
     * Constructor method for telephonySmsHistoryCsv
     * @uses TelephonySmsHistoryCsv::setSession()
     * @uses TelephonySmsHistoryCsv::setSmsAccount()
     * @uses TelephonySmsHistoryCsv::setSmsId()
     * @uses TelephonySmsHistoryCsv::setUser()
     * @uses TelephonySmsHistoryCsv::setPagingStart()
     * @uses TelephonySmsHistoryCsv::setPagingLimit()
     * @uses TelephonySmsHistoryCsv::setSortField()
     * @uses TelephonySmsHistoryCsv::setSortOrder()
     * @uses TelephonySmsHistoryCsv::setTag()
     * @uses TelephonySmsHistoryCsv::setFilter()
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smsAccount, true), gettype($smsAccount)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
     */
    public function setSmsId($smsId = null)
    {
        // validation for constraint: int
        if (!is_null($smsId) && !(is_int($smsId) || ctype_digit($smsId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($smsId, true), gettype($smsId)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
     */
    public function setTag($tag = null)
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tag, true), gettype($tag)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsHistoryCsv
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        return $this;
    }
}
