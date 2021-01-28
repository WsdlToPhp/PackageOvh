<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedAllowedDistributionLanguageStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedAllowedDistributionLanguageStruct extends AbstractStructBase
{
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The desc
     * @var string
     */
    public $desc;
    /**
     * Constructor method for dedicatedAllowedDistributionLanguageStruct
     * @uses DedicatedAllowedDistributionLanguageStruct::setCode()
     * @uses DedicatedAllowedDistributionLanguageStruct::setDesc()
     * @param string $code
     * @param string $desc
     */
    public function __construct($code = null, $desc = null)
    {
        $this
            ->setCode($code)
            ->setDesc($desc);
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
     * @return \Ovh\StructType\DedicatedAllowedDistributionLanguageStruct
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
    /**
     * Get desc value
     * @return string|null
     */
    public function getDesc()
    {
        return $this->desc;
    }
    /**
     * Set desc value
     * @param string $desc
     * @return \Ovh\StructType\DedicatedAllowedDistributionLanguageStruct
     */
    public function setDesc($desc = null)
    {
        // validation for constraint: string
        if (!is_null($desc) && !is_string($desc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desc, true), gettype($desc)), __LINE__);
        }
        $this->desc = $desc;
        return $this;
    }
}
