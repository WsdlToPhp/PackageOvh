<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineGetCodecsReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineGetCodecsReturn extends AbstractStructBase
{
    /**
     * The codecs
     * @var string
     */
    public $codecs;
    /**
     * The availableCodecsList
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $availableCodecsList;
    /**
     * The defaultCodecs
     * @var string
     */
    public $defaultCodecs;
    /**
     * Constructor method for telephonyLineGetCodecsReturn
     * @uses TelephonyLineGetCodecsReturn::setCodecs()
     * @uses TelephonyLineGetCodecsReturn::setAvailableCodecsList()
     * @uses TelephonyLineGetCodecsReturn::setDefaultCodecs()
     * @param string $codecs
     * @param \PayPal\ArrayType\MyArrayOfStringType $availableCodecsList
     * @param string $defaultCodecs
     */
    public function __construct($codecs = null, \PayPal\ArrayType\MyArrayOfStringType $availableCodecsList = null, $defaultCodecs = null)
    {
        $this
            ->setCodecs($codecs)
            ->setAvailableCodecsList($availableCodecsList)
            ->setDefaultCodecs($defaultCodecs);
    }
    /**
     * Get codecs value
     * @return string|null
     */
    public function getCodecs()
    {
        return $this->codecs;
    }
    /**
     * Set codecs value
     * @param string $codecs
     * @return \PayPal\StructType\TelephonyLineGetCodecsReturn
     */
    public function setCodecs($codecs = null)
    {
        // validation for constraint: string
        if (!is_null($codecs) && !is_string($codecs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codecs)), __LINE__);
        }
        $this->codecs = $codecs;
        return $this;
    }
    /**
     * Get availableCodecsList value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getAvailableCodecsList()
    {
        return $this->availableCodecsList;
    }
    /**
     * Set availableCodecsList value
     * @param \PayPal\ArrayType\MyArrayOfStringType $availableCodecsList
     * @return \PayPal\StructType\TelephonyLineGetCodecsReturn
     */
    public function setAvailableCodecsList(\PayPal\ArrayType\MyArrayOfStringType $availableCodecsList = null)
    {
        $this->availableCodecsList = $availableCodecsList;
        return $this;
    }
    /**
     * Get defaultCodecs value
     * @return string|null
     */
    public function getDefaultCodecs()
    {
        return $this->defaultCodecs;
    }
    /**
     * Set defaultCodecs value
     * @param string $defaultCodecs
     * @return \PayPal\StructType\TelephonyLineGetCodecsReturn
     */
    public function setDefaultCodecs($defaultCodecs = null)
    {
        // validation for constraint: string
        if (!is_null($defaultCodecs) && !is_string($defaultCodecs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultCodecs)), __LINE__);
        }
        $this->defaultCodecs = $defaultCodecs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyLineGetCodecsReturn
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
