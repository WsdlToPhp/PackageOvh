<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberWayNameStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberWayNameStruct extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * Constructor method for telephonyNumberWayNameStruct
     * @uses TelephonyNumberWayNameStruct::setName()
     * @uses TelephonyNumberWayNameStruct::setCode()
     * @param string $name
     * @param string $code
     */
    public function __construct($name = null, $code = null)
    {
        $this
            ->setName($name)
            ->setCode($code);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Ovh\StructType\TelephonyNumberWayNameStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Ovh\StructType\TelephonyNumberWayNameStruct
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyNumberWayNameStruct
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
