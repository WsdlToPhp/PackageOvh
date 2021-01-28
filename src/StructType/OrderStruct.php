<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderStruct extends AbstractStructBase
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
     * The isPaid
     * @var bool
     */
    public $isPaid;
    /**
     * The paymentStatus
     * @var string
     */
    public $paymentStatus;
    /**
     * Constructor method for orderStruct
     * @uses OrderStruct::setOrderId()
     * @uses OrderStruct::setOrderPassword()
     * @uses OrderStruct::setOrderUrl()
     * @uses OrderStruct::setIsPaid()
     * @uses OrderStruct::setPaymentStatus()
     * @param int $orderId
     * @param string $orderPassword
     * @param string $orderUrl
     * @param bool $isPaid
     * @param string $paymentStatus
     */
    public function __construct($orderId = null, $orderPassword = null, $orderUrl = null, $isPaid = null, $paymentStatus = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderPassword($orderPassword)
            ->setOrderUrl($orderUrl)
            ->setIsPaid($isPaid)
            ->setPaymentStatus($paymentStatus);
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
     * @return \Ovh\StructType\OrderStruct
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
     * @return \Ovh\StructType\OrderStruct
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
     * @return \Ovh\StructType\OrderStruct
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
     * Get isPaid value
     * @return bool|null
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }
    /**
     * Set isPaid value
     * @param bool $isPaid
     * @return \Ovh\StructType\OrderStruct
     */
    public function setIsPaid($isPaid = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPaid) && !is_bool($isPaid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPaid, true), gettype($isPaid)), __LINE__);
        }
        $this->isPaid = $isPaid;
        return $this;
    }
    /**
     * Get paymentStatus value
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }
    /**
     * Set paymentStatus value
     * @param string $paymentStatus
     * @return \Ovh\StructType\OrderStruct
     */
    public function setPaymentStatus($paymentStatus = null)
    {
        // validation for constraint: string
        if (!is_null($paymentStatus) && !is_string($paymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentStatus, true), gettype($paymentStatus)), __LINE__);
        }
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
}
