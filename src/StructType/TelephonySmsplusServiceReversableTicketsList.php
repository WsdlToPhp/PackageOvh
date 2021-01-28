<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusServiceReversableTicketsList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusServiceReversableTicketsList extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The shortCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shortCode;
    /**
     * The keyword
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $keyword;
    /**
     * The reversableDelay
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reversableDelay;
    /**
     * The limit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $limit;
    /**
     * The limitOffset
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $limitOffset;
    /**
     * The sort
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sort;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filter;
    /**
     * Constructor method for telephonySmsplusServiceReversableTicketsList
     * @uses TelephonySmsplusServiceReversableTicketsList::setSession()
     * @uses TelephonySmsplusServiceReversableTicketsList::setShortCode()
     * @uses TelephonySmsplusServiceReversableTicketsList::setKeyword()
     * @uses TelephonySmsplusServiceReversableTicketsList::setReversableDelay()
     * @uses TelephonySmsplusServiceReversableTicketsList::setLimit()
     * @uses TelephonySmsplusServiceReversableTicketsList::setLimitOffset()
     * @uses TelephonySmsplusServiceReversableTicketsList::setSort()
     * @uses TelephonySmsplusServiceReversableTicketsList::setFilter()
     * @param string $session
     * @param string $shortCode
     * @param string $keyword
     * @param string $reversableDelay
     * @param int $limit
     * @param int $limitOffset
     * @param string $sort
     * @param string $filter
     */
    public function __construct($session = null, $shortCode = null, $keyword = null, $reversableDelay = null, $limit = null, $limitOffset = null, $sort = null, $filter = null)
    {
        $this
            ->setSession($session)
            ->setShortCode($shortCode)
            ->setKeyword($keyword)
            ->setReversableDelay($reversableDelay)
            ->setLimit($limit)
            ->setLimitOffset($limitOffset)
            ->setSort($sort)
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
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList
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
     * Get shortCode value
     * @return string|null
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }
    /**
     * Set shortCode value
     * @param string $shortCode
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList
     */
    public function setShortCode($shortCode = null)
    {
        // validation for constraint: string
        if (!is_null($shortCode) && !is_string($shortCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortCode, true), gettype($shortCode)), __LINE__);
        }
        $this->shortCode = $shortCode;
        return $this;
    }
    /**
     * Get keyword value
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
    /**
     * Set keyword value
     * @param string $keyword
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList
     */
    public function setKeyword($keyword = null)
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyword, true), gettype($keyword)), __LINE__);
        }
        $this->keyword = $keyword;
        return $this;
    }
    /**
     * Get reversableDelay value
     * @return string|null
     */
    public function getReversableDelay()
    {
        return $this->reversableDelay;
    }
    /**
     * Set reversableDelay value
     * @param string $reversableDelay
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList
     */
    public function setReversableDelay($reversableDelay = null)
    {
        // validation for constraint: string
        if (!is_null($reversableDelay) && !is_string($reversableDelay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reversableDelay, true), gettype($reversableDelay)), __LINE__);
        }
        $this->reversableDelay = $reversableDelay;
        return $this;
    }
    /**
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList
     */
    public function setLimit($limit = null)
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        $this->limit = $limit;
        return $this;
    }
    /**
     * Get limitOffset value
     * @return int|null
     */
    public function getLimitOffset()
    {
        return $this->limitOffset;
    }
    /**
     * Set limitOffset value
     * @param int $limitOffset
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList
     */
    public function setLimitOffset($limitOffset = null)
    {
        // validation for constraint: int
        if (!is_null($limitOffset) && !(is_int($limitOffset) || ctype_digit($limitOffset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limitOffset, true), gettype($limitOffset)), __LINE__);
        }
        $this->limitOffset = $limitOffset;
        return $this;
    }
    /**
     * Get sort value
     * @return string|null
     */
    public function getSort()
    {
        return $this->sort;
    }
    /**
     * Set sort value
     * @param string $sort
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList
     */
    public function setSort($sort = null)
    {
        // validation for constraint: string
        if (!is_null($sort) && !is_string($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sort, true), gettype($sort)), __LINE__);
        }
        $this->sort = $sort;
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
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsList
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
