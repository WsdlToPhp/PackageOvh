<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderDedicatedFailover StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderDedicatedFailover extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The orderIps
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $orderIps;
    /**
     * The payWithPoints
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $payWithPoints;
    /**
     * Constructor method for orderDedicatedFailover
     * @uses OrderDedicatedFailover::setSession()
     * @uses OrderDedicatedFailover::setDomain()
     * @uses OrderDedicatedFailover::setOrderIps()
     * @uses OrderDedicatedFailover::setPayWithPoints()
     * @param string $session
     * @param string $domain
     * @param int $orderIps
     * @param bool $payWithPoints
     */
    public function __construct($session = null, $domain = null, $orderIps = null, $payWithPoints = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setOrderIps($orderIps)
            ->setPayWithPoints($payWithPoints);
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
     * @return \Ovh\StructType\OrderDedicatedFailover
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
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\OrderDedicatedFailover
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get orderIps value
     * @return int|null
     */
    public function getOrderIps()
    {
        return $this->orderIps;
    }
    /**
     * Set orderIps value
     * @param int $orderIps
     * @return \Ovh\StructType\OrderDedicatedFailover
     */
    public function setOrderIps($orderIps = null)
    {
        // validation for constraint: int
        if (!is_null($orderIps) && !(is_int($orderIps) || ctype_digit($orderIps))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderIps, true), gettype($orderIps)), __LINE__);
        }
        $this->orderIps = $orderIps;
        return $this;
    }
    /**
     * Get payWithPoints value
     * @return bool|null
     */
    public function getPayWithPoints()
    {
        return $this->payWithPoints;
    }
    /**
     * Set payWithPoints value
     * @param bool $payWithPoints
     * @return \Ovh\StructType\OrderDedicatedFailover
     */
    public function setPayWithPoints($payWithPoints = null)
    {
        // validation for constraint: boolean
        if (!is_null($payWithPoints) && !is_bool($payWithPoints)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payWithPoints, true), gettype($payWithPoints)), __LINE__);
        }
        $this->payWithPoints = $payWithPoints;
        return $this;
    }
}
