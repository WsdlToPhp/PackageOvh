<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySecurityDepositCreditReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySecurityDepositCreditReturn extends AbstractStructBase
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
     * The vat
     * @var float
     */
    public $vat;
    /**
     * The totalPriceWithVat
     * @var float
     */
    public $totalPriceWithVat;
    /**
     * The ribBankCode
     * @var string
     */
    public $ribBankCode;
    /**
     * The ribAgencyCode
     * @var string
     */
    public $ribAgencyCode;
    /**
     * The ribAccountNumber
     * @var string
     */
    public $ribAccountNumber;
    /**
     * The ribKey
     * @var string
     */
    public $ribKey;
    /**
     * The iban
     * @var string
     */
    public $iban;
    /**
     * The bic
     * @var string
     */
    public $bic;
    /**
     * Constructor method for telephonySecurityDepositCreditReturn
     * @uses TelephonySecurityDepositCreditReturn::setOrderId()
     * @uses TelephonySecurityDepositCreditReturn::setOrderPassword()
     * @uses TelephonySecurityDepositCreditReturn::setOrderUrl()
     * @uses TelephonySecurityDepositCreditReturn::setTotalPrice()
     * @uses TelephonySecurityDepositCreditReturn::setVat()
     * @uses TelephonySecurityDepositCreditReturn::setTotalPriceWithVat()
     * @uses TelephonySecurityDepositCreditReturn::setRibBankCode()
     * @uses TelephonySecurityDepositCreditReturn::setRibAgencyCode()
     * @uses TelephonySecurityDepositCreditReturn::setRibAccountNumber()
     * @uses TelephonySecurityDepositCreditReturn::setRibKey()
     * @uses TelephonySecurityDepositCreditReturn::setIban()
     * @uses TelephonySecurityDepositCreditReturn::setBic()
     * @param int $orderId
     * @param string $orderPassword
     * @param string $orderUrl
     * @param float $totalPrice
     * @param float $vat
     * @param float $totalPriceWithVat
     * @param string $ribBankCode
     * @param string $ribAgencyCode
     * @param string $ribAccountNumber
     * @param string $ribKey
     * @param string $iban
     * @param string $bic
     */
    public function __construct($orderId = null, $orderPassword = null, $orderUrl = null, $totalPrice = null, $vat = null, $totalPriceWithVat = null, $ribBankCode = null, $ribAgencyCode = null, $ribAccountNumber = null, $ribKey = null, $iban = null, $bic = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderPassword($orderPassword)
            ->setOrderUrl($orderUrl)
            ->setTotalPrice($totalPrice)
            ->setVat($vat)
            ->setTotalPriceWithVat($totalPriceWithVat)
            ->setRibBankCode($ribBankCode)
            ->setRibAgencyCode($ribAgencyCode)
            ->setRibAccountNumber($ribAccountNumber)
            ->setRibKey($ribKey)
            ->setIban($iban)
            ->setBic($bic);
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
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: int
        if (!is_null($orderId) && !is_numeric($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($orderId)), __LINE__);
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
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setOrderPassword($orderPassword = null)
    {
        // validation for constraint: string
        if (!is_null($orderPassword) && !is_string($orderPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderPassword)), __LINE__);
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
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setOrderUrl($orderUrl = null)
    {
        // validation for constraint: string
        if (!is_null($orderUrl) && !is_string($orderUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderUrl)), __LINE__);
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
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setTotalPrice($totalPrice = null)
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get vat value
     * @return float|null
     */
    public function getVat()
    {
        return $this->vat;
    }
    /**
     * Set vat value
     * @param float $vat
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setVat($vat = null)
    {
        $this->vat = $vat;
        return $this;
    }
    /**
     * Get totalPriceWithVat value
     * @return float|null
     */
    public function getTotalPriceWithVat()
    {
        return $this->totalPriceWithVat;
    }
    /**
     * Set totalPriceWithVat value
     * @param float $totalPriceWithVat
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setTotalPriceWithVat($totalPriceWithVat = null)
    {
        $this->totalPriceWithVat = $totalPriceWithVat;
        return $this;
    }
    /**
     * Get ribBankCode value
     * @return string|null
     */
    public function getRibBankCode()
    {
        return $this->ribBankCode;
    }
    /**
     * Set ribBankCode value
     * @param string $ribBankCode
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setRibBankCode($ribBankCode = null)
    {
        // validation for constraint: string
        if (!is_null($ribBankCode) && !is_string($ribBankCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ribBankCode)), __LINE__);
        }
        $this->ribBankCode = $ribBankCode;
        return $this;
    }
    /**
     * Get ribAgencyCode value
     * @return string|null
     */
    public function getRibAgencyCode()
    {
        return $this->ribAgencyCode;
    }
    /**
     * Set ribAgencyCode value
     * @param string $ribAgencyCode
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setRibAgencyCode($ribAgencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($ribAgencyCode) && !is_string($ribAgencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ribAgencyCode)), __LINE__);
        }
        $this->ribAgencyCode = $ribAgencyCode;
        return $this;
    }
    /**
     * Get ribAccountNumber value
     * @return string|null
     */
    public function getRibAccountNumber()
    {
        return $this->ribAccountNumber;
    }
    /**
     * Set ribAccountNumber value
     * @param string $ribAccountNumber
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setRibAccountNumber($ribAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ribAccountNumber) && !is_string($ribAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ribAccountNumber)), __LINE__);
        }
        $this->ribAccountNumber = $ribAccountNumber;
        return $this;
    }
    /**
     * Get ribKey value
     * @return string|null
     */
    public function getRibKey()
    {
        return $this->ribKey;
    }
    /**
     * Set ribKey value
     * @param string $ribKey
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setRibKey($ribKey = null)
    {
        // validation for constraint: string
        if (!is_null($ribKey) && !is_string($ribKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ribKey)), __LINE__);
        }
        $this->ribKey = $ribKey;
        return $this;
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban()
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setIban($iban = null)
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        return $this;
    }
    /**
     * Get bic value
     * @return string|null
     */
    public function getBic()
    {
        return $this->bic;
    }
    /**
     * Set bic value
     * @param string $bic
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
     */
    public function setBic($bic = null)
    {
        // validation for constraint: string
        if (!is_null($bic) && !is_string($bic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bic)), __LINE__);
        }
        $this->bic = $bic;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySecurityDepositCreditReturn
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
