<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillStruct extends AbstractStructBase
{
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The price
     * @var float
     */
    public $price;
    /**
     * The orderId
     * @var int
     */
    public $orderId;
    /**
     * The orderPaid
     * @var bool
     */
    public $orderPaid;
    /**
     * The orderUrl
     * @var string
     */
    public $orderUrl;
    /**
     * The billUrl
     * @var string
     */
    public $billUrl;
    /**
     * Constructor method for telephonyBillStruct
     * @uses TelephonyBillStruct::setDate()
     * @uses TelephonyBillStruct::setPrice()
     * @uses TelephonyBillStruct::setOrderId()
     * @uses TelephonyBillStruct::setOrderPaid()
     * @uses TelephonyBillStruct::setOrderUrl()
     * @uses TelephonyBillStruct::setBillUrl()
     * @param string $date
     * @param float $price
     * @param int $orderId
     * @param bool $orderPaid
     * @param string $orderUrl
     * @param string $billUrl
     */
    public function __construct($date = null, $price = null, $orderId = null, $orderPaid = null, $orderUrl = null, $billUrl = null)
    {
        $this
            ->setDate($date)
            ->setPrice($price)
            ->setOrderId($orderId)
            ->setOrderPaid($orderPaid)
            ->setOrderUrl($orderUrl)
            ->setBillUrl($billUrl);
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Ovh\StructType\TelephonyBillStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Ovh\StructType\TelephonyBillStruct
     */
    public function setPrice($price = null)
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        return $this;
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
     * @return \Ovh\StructType\TelephonyBillStruct
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
     * Get orderPaid value
     * @return bool|null
     */
    public function getOrderPaid()
    {
        return $this->orderPaid;
    }
    /**
     * Set orderPaid value
     * @param bool $orderPaid
     * @return \Ovh\StructType\TelephonyBillStruct
     */
    public function setOrderPaid($orderPaid = null)
    {
        // validation for constraint: boolean
        if (!is_null($orderPaid) && !is_bool($orderPaid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($orderPaid, true), gettype($orderPaid)), __LINE__);
        }
        $this->orderPaid = $orderPaid;
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
     * @return \Ovh\StructType\TelephonyBillStruct
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
     * Get billUrl value
     * @return string|null
     */
    public function getBillUrl()
    {
        return $this->billUrl;
    }
    /**
     * Set billUrl value
     * @param string $billUrl
     * @return \Ovh\StructType\TelephonyBillStruct
     */
    public function setBillUrl($billUrl = null)
    {
        // validation for constraint: string
        if (!is_null($billUrl) && !is_string($billUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billUrl, true), gettype($billUrl)), __LINE__);
        }
        $this->billUrl = $billUrl;
        return $this;
    }
}
