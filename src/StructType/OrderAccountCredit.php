<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderAccountCredit StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderAccountCredit extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $amount;
    /**
     * Constructor method for orderAccountCredit
     * @uses OrderAccountCredit::setSession()
     * @uses OrderAccountCredit::setAmount()
     * @param string $session
     * @param int $amount
     */
    public function __construct($session = null, $amount = null)
    {
        $this
            ->setSession($session)
            ->setAmount($amount);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\OrderAccountCredit
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Ovh\StructType\OrderAccountCredit
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !(is_int($amount) || ctype_digit($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
}
