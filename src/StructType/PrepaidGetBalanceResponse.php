<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidGetBalanceResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidGetBalanceResponse extends AbstractStructBase
{
    /**
     * The return
     * @var float
     */
    public $return;
    /**
     * Constructor method for prepaidGetBalanceResponse
     * @uses PrepaidGetBalanceResponse::setReturn()
     * @param float $return
     */
    public function __construct($return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return float|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param float $return
     * @return \Ovh\StructType\PrepaidGetBalanceResponse
     */
    public function setReturn($return = null)
    {
        // validation for constraint: float
        if (!is_null($return) && !(is_float($return) || is_numeric($return))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        return $this;
    }
}
