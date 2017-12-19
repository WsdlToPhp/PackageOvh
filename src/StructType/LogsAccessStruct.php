<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for logsAccessStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LogsAccessStruct extends AbstractStructBase
{
    /**
     * The user
     * @var string
     */
    public $user;
    /**
     * The lastUpdate
     * @var string
     */
    public $lastUpdate;
    /**
     * Constructor method for logsAccessStruct
     * @uses LogsAccessStruct::setUser()
     * @uses LogsAccessStruct::setLastUpdate()
     * @param string $user
     * @param string $lastUpdate
     */
    public function __construct($user = null, $lastUpdate = null)
    {
        $this
            ->setUser($user)
            ->setLastUpdate($lastUpdate);
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
     * @return \Ovh\StructType\LogsAccessStruct
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
     * Get lastUpdate value
     * @return string|null
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
    /**
     * Set lastUpdate value
     * @param string $lastUpdate
     * @return \Ovh\StructType\LogsAccessStruct
     */
    public function setLastUpdate($lastUpdate = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdate)), __LINE__);
        }
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\LogsAccessStruct
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
