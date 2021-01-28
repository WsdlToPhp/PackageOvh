<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineAliasPoolStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineAliasPoolStruct extends AbstractStructBase
{
    /**
     * The poolNumber
     * @var int
     */
    public $poolNumber;
    /**
     * The service
     * @var string
     */
    public $service;
    /**
     * The display
     * @var string
     */
    public $display;
    /**
     * Constructor method for telephonyLineAliasPoolStruct
     * @uses TelephonyLineAliasPoolStruct::setPoolNumber()
     * @uses TelephonyLineAliasPoolStruct::setService()
     * @uses TelephonyLineAliasPoolStruct::setDisplay()
     * @param int $poolNumber
     * @param string $service
     * @param string $display
     */
    public function __construct($poolNumber = null, $service = null, $display = null)
    {
        $this
            ->setPoolNumber($poolNumber)
            ->setService($service)
            ->setDisplay($display);
    }
    /**
     * Get poolNumber value
     * @return int|null
     */
    public function getPoolNumber()
    {
        return $this->poolNumber;
    }
    /**
     * Set poolNumber value
     * @param int $poolNumber
     * @return \Ovh\StructType\TelephonyLineAliasPoolStruct
     */
    public function setPoolNumber($poolNumber = null)
    {
        // validation for constraint: int
        if (!is_null($poolNumber) && !(is_int($poolNumber) || ctype_digit($poolNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($poolNumber, true), gettype($poolNumber)), __LINE__);
        }
        $this->poolNumber = $poolNumber;
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \Ovh\StructType\TelephonyLineAliasPoolStruct
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get display value
     * @return string|null
     */
    public function getDisplay()
    {
        return $this->display;
    }
    /**
     * Set display value
     * @param string $display
     * @return \Ovh\StructType\TelephonyLineAliasPoolStruct
     */
    public function setDisplay($display = null)
    {
        // validation for constraint: string
        if (!is_null($display) && !is_string($display)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($display, true), gettype($display)), __LINE__);
        }
        $this->display = $display;
        return $this;
    }
}
