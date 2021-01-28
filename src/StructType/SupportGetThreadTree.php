<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportGetThreadTree StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportGetThreadTree extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The threadId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $threadId;
    /**
     * Constructor method for supportGetThreadTree
     * @uses SupportGetThreadTree::setSession()
     * @uses SupportGetThreadTree::setThreadId()
     * @param string $session
     * @param int $threadId
     */
    public function __construct($session = null, $threadId = null)
    {
        $this
            ->setSession($session)
            ->setThreadId($threadId);
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
     * @return \Ovh\StructType\SupportGetThreadTree
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
     * Get threadId value
     * @return int|null
     */
    public function getThreadId()
    {
        return $this->threadId;
    }
    /**
     * Set threadId value
     * @param int $threadId
     * @return \Ovh\StructType\SupportGetThreadTree
     */
    public function setThreadId($threadId = null)
    {
        // validation for constraint: int
        if (!is_null($threadId) && !(is_int($threadId) || ctype_digit($threadId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($threadId, true), gettype($threadId)), __LINE__);
        }
        $this->threadId = $threadId;
        return $this;
    }
}
