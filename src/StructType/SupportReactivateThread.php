<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportReactivateThread StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportReactivateThread extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The threadId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $threadId;
    /**
     * Constructor method for supportReactivateThread
     * @uses SupportReactivateThread::setSession()
     * @uses SupportReactivateThread::setThreadId()
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
     * @return \PayPal\StructType\SupportReactivateThread
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
     * @return \PayPal\StructType\SupportReactivateThread
     */
    public function setThreadId($threadId = null)
    {
        // validation for constraint: int
        if (!is_null($threadId) && !is_numeric($threadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($threadId)), __LINE__);
        }
        $this->threadId = $threadId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SupportReactivateThread
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
