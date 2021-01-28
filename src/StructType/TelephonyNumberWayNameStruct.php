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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
}
