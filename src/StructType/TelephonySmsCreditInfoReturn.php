<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsCreditInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsCreditInfoReturn extends AbstractStructBase
{
    /**
     * The waiting
     * @var int
     */
    public $waiting;
    /**
     * The left
     * @var int
     */
    public $left;
    /**
     * Constructor method for telephonySmsCreditInfoReturn
     * @uses TelephonySmsCreditInfoReturn::setWaiting()
     * @uses TelephonySmsCreditInfoReturn::setLeft()
     * @param int $waiting
     * @param int $left
     */
    public function __construct($waiting = null, $left = null)
    {
        $this
            ->setWaiting($waiting)
            ->setLeft($left);
    }
    /**
     * Get waiting value
     * @return int|null
     */
    public function getWaiting()
    {
        return $this->waiting;
    }
    /**
     * Set waiting value
     * @param int $waiting
     * @return \Ovh\StructType\TelephonySmsCreditInfoReturn
     */
    public function setWaiting($waiting = null)
    {
        // validation for constraint: int
        if (!is_null($waiting) && !(is_int($waiting) || ctype_digit($waiting))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($waiting, true), gettype($waiting)), __LINE__);
        }
        $this->waiting = $waiting;
        return $this;
    }
    /**
     * Get left value
     * @return int|null
     */
    public function getLeft()
    {
        return $this->left;
    }
    /**
     * Set left value
     * @param int $left
     * @return \Ovh\StructType\TelephonySmsCreditInfoReturn
     */
    public function setLeft($left = null)
    {
        // validation for constraint: int
        if (!is_null($left) && !(is_int($left) || ctype_digit($left))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($left, true), gettype($left)), __LINE__);
        }
        $this->left = $left;
        return $this;
    }
}
