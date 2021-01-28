<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderDedicatedFailoverRipe StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderDedicatedFailoverRipe extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $address;
    /**
     * The period
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $period;
    /**
     * The payWithPoints
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $payWithPoints;
    /**
     * Constructor method for orderDedicatedFailoverRipe
     * @uses OrderDedicatedFailoverRipe::setSession()
     * @uses OrderDedicatedFailoverRipe::setHostname()
     * @uses OrderDedicatedFailoverRipe::setAddress()
     * @uses OrderDedicatedFailoverRipe::setPeriod()
     * @uses OrderDedicatedFailoverRipe::setPayWithPoints()
     * @param string $session
     * @param string $hostname
     * @param int $address
     * @param int $period
     * @param bool $payWithPoints
     */
    public function __construct($session = null, $hostname = null, $address = null, $period = null, $payWithPoints = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setAddress($address)
            ->setPeriod($period)
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
     * @return \Ovh\StructType\OrderDedicatedFailoverRipe
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
     * Get hostname value
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * Set hostname value
     * @param string $hostname
     * @return \Ovh\StructType\OrderDedicatedFailoverRipe
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostname, true), gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Get address value
     * @return int|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param int $address
     * @return \Ovh\StructType\OrderDedicatedFailoverRipe
     */
    public function setAddress($address = null)
    {
        // validation for constraint: int
        if (!is_null($address) && !(is_int($address) || ctype_digit($address))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get period value
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /**
     * Set period value
     * @param int $period
     * @return \Ovh\StructType\OrderDedicatedFailoverRipe
     */
    public function setPeriod($period = null)
    {
        // validation for constraint: int
        if (!is_null($period) && !(is_int($period) || ctype_digit($period))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        $this->period = $period;
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
     * @return \Ovh\StructType\OrderDedicatedFailoverRipe
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
