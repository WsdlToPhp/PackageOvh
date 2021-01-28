<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nicTldEligibilityResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NicTldEligibilityResponse extends AbstractStructBase
{
    /**
     * The return
     * @var bool
     */
    public $return;
    /**
     * Constructor method for nicTldEligibilityResponse
     * @uses NicTldEligibilityResponse::setReturn()
     * @param bool $return
     */
    public function __construct($return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return bool|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param bool $return
     * @return \Ovh\StructType\NicTldEligibilityResponse
     */
    public function setReturn($return = null)
    {
        // validation for constraint: boolean
        if (!is_null($return) && !is_bool($return)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        return $this;
    }
}
