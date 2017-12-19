<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineOrder StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineOrder extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The billingAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
    /**
     * The offer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $offer;
    /**
     * The prefix
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $prefix;
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $quantity;
    /**
     * The payWithPoints
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $payWithPoints;
    /**
     * Constructor method for telephonyLineOrder
     * @uses TelephonyLineOrder::setSession()
     * @uses TelephonyLineOrder::setBillingAccount()
     * @uses TelephonyLineOrder::setOffer()
     * @uses TelephonyLineOrder::setPrefix()
     * @uses TelephonyLineOrder::setQuantity()
     * @uses TelephonyLineOrder::setPayWithPoints()
     * @param string $session
     * @param string $billingAccount
     * @param string $offer
     * @param string $prefix
     * @param int $quantity
     * @param bool $payWithPoints
     */
    public function __construct($session = null, $billingAccount = null, $offer = null, $prefix = null, $quantity = null, $payWithPoints = null)
    {
        $this
            ->setSession($session)
            ->setBillingAccount($billingAccount)
            ->setOffer($offer)
            ->setPrefix($prefix)
            ->setQuantity($quantity)
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
     * @return \Ovh\StructType\TelephonyLineOrder
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get billingAccount value
     * @return string|null
     */
    public function getBillingAccount()
    {
        return $this->billingAccount;
    }
    /**
     * Set billingAccount value
     * @param string $billingAccount
     * @return \Ovh\StructType\TelephonyLineOrder
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAccount)), __LINE__);
        }
        $this->billingAccount = $billingAccount;
        return $this;
    }
    /**
     * Get offer value
     * @return string|null
     */
    public function getOffer()
    {
        return $this->offer;
    }
    /**
     * Set offer value
     * @param string $offer
     * @return \Ovh\StructType\TelephonyLineOrder
     */
    public function setOffer($offer = null)
    {
        // validation for constraint: string
        if (!is_null($offer) && !is_string($offer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offer)), __LINE__);
        }
        $this->offer = $offer;
        return $this;
    }
    /**
     * Get prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Set prefix value
     * @param string $prefix
     * @return \Ovh\StructType\TelephonyLineOrder
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Ovh\StructType\TelephonyLineOrder
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
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
     * @return \Ovh\StructType\TelephonyLineOrder
     */
    public function setPayWithPoints($payWithPoints = null)
    {
        // validation for constraint: boolean
        if (!is_null($payWithPoints) && !is_bool($payWithPoints)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payWithPoints)), __LINE__);
        }
        $this->payWithPoints = $payWithPoints;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyLineOrder
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
