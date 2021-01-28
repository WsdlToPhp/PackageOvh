<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportGetThreads StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportGetThreads extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The page
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $page;
    /**
     * The view
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $view;
    /**
     * The unread
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $unread;
    /**
     * The sortDir
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortDir;
    /**
     * The sortBy
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortBy;
    /**
     * The limit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $limit;
    /**
     * Constructor method for supportGetThreads
     * @uses SupportGetThreads::setSession()
     * @uses SupportGetThreads::setPage()
     * @uses SupportGetThreads::setView()
     * @uses SupportGetThreads::setUnread()
     * @uses SupportGetThreads::setSortDir()
     * @uses SupportGetThreads::setSortBy()
     * @uses SupportGetThreads::setLimit()
     * @param string $session
     * @param int $page
     * @param string $view
     * @param bool $unread
     * @param string $sortDir
     * @param string $sortBy
     * @param int $limit
     */
    public function __construct($session = null, $page = null, $view = null, $unread = null, $sortDir = null, $sortBy = null, $limit = null)
    {
        $this
            ->setSession($session)
            ->setPage($page)
            ->setView($view)
            ->setUnread($unread)
            ->setSortDir($sortDir)
            ->setSortBy($sortBy)
            ->setLimit($limit);
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
     * @return \Ovh\StructType\SupportGetThreads
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
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Ovh\StructType\SupportGetThreads
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !(is_int($page) || ctype_digit($page))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Get view value
     * @return string|null
     */
    public function getView()
    {
        return $this->view;
    }
    /**
     * Set view value
     * @param string $view
     * @return \Ovh\StructType\SupportGetThreads
     */
    public function setView($view = null)
    {
        // validation for constraint: string
        if (!is_null($view) && !is_string($view)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($view, true), gettype($view)), __LINE__);
        }
        $this->view = $view;
        return $this;
    }
    /**
     * Get unread value
     * @return bool|null
     */
    public function getUnread()
    {
        return $this->unread;
    }
    /**
     * Set unread value
     * @param bool $unread
     * @return \Ovh\StructType\SupportGetThreads
     */
    public function setUnread($unread = null)
    {
        // validation for constraint: boolean
        if (!is_null($unread) && !is_bool($unread)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unread, true), gettype($unread)), __LINE__);
        }
        $this->unread = $unread;
        return $this;
    }
    /**
     * Get sortDir value
     * @return string|null
     */
    public function getSortDir()
    {
        return $this->sortDir;
    }
    /**
     * Set sortDir value
     * @param string $sortDir
     * @return \Ovh\StructType\SupportGetThreads
     */
    public function setSortDir($sortDir = null)
    {
        // validation for constraint: string
        if (!is_null($sortDir) && !is_string($sortDir)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortDir, true), gettype($sortDir)), __LINE__);
        }
        $this->sortDir = $sortDir;
        return $this;
    }
    /**
     * Get sortBy value
     * @return string|null
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }
    /**
     * Set sortBy value
     * @param string $sortBy
     * @return \Ovh\StructType\SupportGetThreads
     */
    public function setSortBy($sortBy = null)
    {
        // validation for constraint: string
        if (!is_null($sortBy) && !is_string($sortBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortBy, true), gettype($sortBy)), __LINE__);
        }
        $this->sortBy = $sortBy;
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
     * @return \Ovh\StructType\SupportGetThreads
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
}
