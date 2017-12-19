<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rpsGetIOStatsDetailRawStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RpsGetIOStatsDetailRawStruct extends AbstractStructBase
{
    /**
     * The raw
     * @var string
     */
    public $raw;
    /**
     * Constructor method for rpsGetIOStatsDetailRawStruct
     * @uses RpsGetIOStatsDetailRawStruct::setRaw()
     * @param string $raw
     */
    public function __construct($raw = null)
    {
        $this
            ->setRaw($raw);
    }
    /**
     * Get raw value
     * @return string|null
     */
    public function getRaw()
    {
        return $this->raw;
    }
    /**
     * Set raw value
     * @param string $raw
     * @return \PayPal\StructType\RpsGetIOStatsDetailRawStruct
     */
    public function setRaw($raw = null)
    {
        // validation for constraint: string
        if (!is_null($raw) && !is_string($raw)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($raw)), __LINE__);
        }
        $this->raw = $raw;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RpsGetIOStatsDetailRawStruct
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
