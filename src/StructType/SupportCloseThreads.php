<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportCloseThreads StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportCloseThreads extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The threads
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $threads;
    /**
     * Constructor method for supportCloseThreads
     * @uses SupportCloseThreads::setSession()
     * @uses SupportCloseThreads::setThreads()
     * @param string $session
     * @param string $threads
     */
    public function __construct($session = null, $threads = null)
    {
        $this
            ->setSession($session)
            ->setThreads($threads);
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
     * @return \Ovh\StructType\SupportCloseThreads
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
     * Get threads value
     * @return string|null
     */
    public function getThreads()
    {
        return $this->threads;
    }
    /**
     * Set threads value
     * @param string $threads
     * @return \Ovh\StructType\SupportCloseThreads
     */
    public function setThreads($threads = null)
    {
        // validation for constraint: string
        if (!is_null($threads) && !is_string($threads)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($threads)), __LINE__);
        }
        $this->threads = $threads;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\SupportCloseThreads
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
