<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetworkTrafficDetailsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetworkTrafficDetailsStruct extends AbstractStructBase
{
    /**
     * The in
     * @var string
     */
    public $in;
    /**
     * The out
     * @var string
     */
    public $out;
    /**
     * Constructor method for dedicatedNetworkTrafficDetailsStruct
     * @uses DedicatedNetworkTrafficDetailsStruct::setIn()
     * @uses DedicatedNetworkTrafficDetailsStruct::setOut()
     * @param string $in
     * @param string $out
     */
    public function __construct($in = null, $out = null)
    {
        $this
            ->setIn($in)
            ->setOut($out);
    }
    /**
     * Get in value
     * @return string|null
     */
    public function getIn()
    {
        return $this->in;
    }
    /**
     * Set in value
     * @param string $in
     * @return \PayPal\StructType\DedicatedNetworkTrafficDetailsStruct
     */
    public function setIn($in = null)
    {
        // validation for constraint: string
        if (!is_null($in) && !is_string($in)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($in)), __LINE__);
        }
        $this->in = $in;
        return $this;
    }
    /**
     * Get out value
     * @return string|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param string $out
     * @return \PayPal\StructType\DedicatedNetworkTrafficDetailsStruct
     */
    public function setOut($out = null)
    {
        // validation for constraint: string
        if (!is_null($out) && !is_string($out)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($out)), __LINE__);
        }
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedNetworkTrafficDetailsStruct
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
