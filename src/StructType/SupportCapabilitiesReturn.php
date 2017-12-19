<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportCapabilitiesReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportCapabilitiesReturn extends AbstractStructBase
{
    /**
     * The hasSupportPlus
     * @var bool
     */
    public $hasSupportPlus;
    /**
     * Constructor method for supportCapabilitiesReturn
     * @uses SupportCapabilitiesReturn::setHasSupportPlus()
     * @param bool $hasSupportPlus
     */
    public function __construct($hasSupportPlus = null)
    {
        $this
            ->setHasSupportPlus($hasSupportPlus);
    }
    /**
     * Get hasSupportPlus value
     * @return bool|null
     */
    public function getHasSupportPlus()
    {
        return $this->hasSupportPlus;
    }
    /**
     * Set hasSupportPlus value
     * @param bool $hasSupportPlus
     * @return \PayPal\StructType\SupportCapabilitiesReturn
     */
    public function setHasSupportPlus($hasSupportPlus = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasSupportPlus) && !is_bool($hasSupportPlus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasSupportPlus)), __LINE__);
        }
        $this->hasSupportPlus = $hasSupportPlus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SupportCapabilitiesReturn
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
