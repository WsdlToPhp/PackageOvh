<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberOrderReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberOrderReturn extends AbstractStructBase
{
    /**
     * The orderId
     * @var int
     */
    public $orderId;
    /**
     * The orderPassword
     * @var string
     */
    public $orderPassword;
    /**
     * The orderUrl
     * @var string
     */
    public $orderUrl;
    /**
     * The totalPrice
     * @var float
     */
    public $totalPrice;
    /**
     * Constructor method for telephonyNumberOrderReturn
     * @uses TelephonyNumberOrderReturn::setOrderId()
     * @uses TelephonyNumberOrderReturn::setOrderPassword()
     * @uses TelephonyNumberOrderReturn::setOrderUrl()
     * @uses TelephonyNumberOrderReturn::setTotalPrice()
     * @param int $orderId
     * @param string $orderPassword
     * @param string $orderUrl
     * @param float $totalPrice
     */
    public function __construct($orderId = null, $orderPassword = null, $orderUrl = null, $totalPrice = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderPassword($orderPassword)
            ->setOrderUrl($orderUrl)
            ->setTotalPrice($totalPrice);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Ovh\StructType\TelephonyNumberOrderReturn
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Get orderPassword value
     * @return string|null
     */
    public function getOrderPassword()
    {
        return $this->orderPassword;
    }
    /**
     * Set orderPassword value
     * @param string $orderPassword
     * @return \Ovh\StructType\TelephonyNumberOrderReturn
     */
    public function setOrderPassword($orderPassword = null)
    {
        // validation for constraint: string
        if (!is_null($orderPassword) && !is_string($orderPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderPassword, true), gettype($orderPassword)), __LINE__);
        }
        $this->orderPassword = $orderPassword;
        return $this;
    }
    /**
     * Get orderUrl value
     * @return string|null
     */
    public function getOrderUrl()
    {
        return $this->orderUrl;
    }
    /**
     * Set orderUrl value
     * @param string $orderUrl
     * @return \Ovh\StructType\TelephonyNumberOrderReturn
     */
    public function setOrderUrl($orderUrl = null)
    {
        // validation for constraint: string
        if (!is_null($orderUrl) && !is_string($orderUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderUrl, true), gettype($orderUrl)), __LINE__);
        }
        $this->orderUrl = $orderUrl;
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Ovh\StructType\TelephonyNumberOrderReturn
     */
    public function setTotalPrice($totalPrice = null)
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        return $this;
    }
}
