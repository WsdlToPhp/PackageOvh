<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRipeQuery StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRipeQuery extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The search
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $search;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for dedicatedRipeQuery
     * @uses DedicatedRipeQuery::setSession()
     * @uses DedicatedRipeQuery::setSearch()
     * @uses DedicatedRipeQuery::setType()
     * @param string $session
     * @param string $search
     * @param string $type
     */
    public function __construct($session = null, $search = null, $type = null)
    {
        $this
            ->setSession($session)
            ->setSearch($search)
            ->setType($type);
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
     * @return \Ovh\StructType\DedicatedRipeQuery
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
     * Get search value
     * @return string|null
     */
    public function getSearch()
    {
        return $this->search;
    }
    /**
     * Set search value
     * @param string $search
     * @return \Ovh\StructType\DedicatedRipeQuery
     */
    public function setSearch($search = null)
    {
        // validation for constraint: string
        if (!is_null($search) && !is_string($search)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($search, true), gettype($search)), __LINE__);
        }
        $this->search = $search;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\DedicatedRipeQuery
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
