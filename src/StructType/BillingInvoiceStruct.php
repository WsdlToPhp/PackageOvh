<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingInvoiceStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingInvoiceStruct extends AbstractStructBase
{
    /**
     * The vat
     * @var float
     */
    public $vat;
    /**
     * The totalPrice
     * @var float
     */
    public $totalPrice;
    /**
     * The totalPriceWithVat
     * @var float
     */
    public $totalPriceWithVat;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The nic
     * @var string
     */
    public $nic;
    /**
     * The billnum
     * @var string
     */
    public $billnum;
    /**
     * The details
     * @var \PayPal\ArrayType\MyArrayOfBillingInvoiceDetailStructType
     */
    public $details;
    /**
     * The domains
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $domains;
    /**
     * The billingCountry
     * @var string
     */
    public $billingCountry;
    /**
     * The ordernum
     * @var string
     */
    public $ordernum;
    /**
     * Constructor method for billingInvoiceStruct
     * @uses BillingInvoiceStruct::setVat()
     * @uses BillingInvoiceStruct::setTotalPrice()
     * @uses BillingInvoiceStruct::setTotalPriceWithVat()
     * @uses BillingInvoiceStruct::setDate()
     * @uses BillingInvoiceStruct::setNic()
     * @uses BillingInvoiceStruct::setBillnum()
     * @uses BillingInvoiceStruct::setDetails()
     * @uses BillingInvoiceStruct::setDomains()
     * @uses BillingInvoiceStruct::setBillingCountry()
     * @uses BillingInvoiceStruct::setOrdernum()
     * @param float $vat
     * @param float $totalPrice
     * @param float $totalPriceWithVat
     * @param string $date
     * @param string $nic
     * @param string $billnum
     * @param \PayPal\ArrayType\MyArrayOfBillingInvoiceDetailStructType $details
     * @param \PayPal\ArrayType\MyArrayOfStringType $domains
     * @param string $billingCountry
     * @param string $ordernum
     */
    public function __construct($vat = null, $totalPrice = null, $totalPriceWithVat = null, $date = null, $nic = null, $billnum = null, \PayPal\ArrayType\MyArrayOfBillingInvoiceDetailStructType $details = null, \PayPal\ArrayType\MyArrayOfStringType $domains = null, $billingCountry = null, $ordernum = null)
    {
        $this
            ->setVat($vat)
            ->setTotalPrice($totalPrice)
            ->setTotalPriceWithVat($totalPriceWithVat)
            ->setDate($date)
            ->setNic($nic)
            ->setBillnum($billnum)
            ->setDetails($details)
            ->setDomains($domains)
            ->setBillingCountry($billingCountry)
            ->setOrdernum($ordernum);
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
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setVat($vat = null)
    {
        $this->vat = $vat;
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
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setTotalPrice($totalPrice = null)
    {
        $this->totalPrice = $totalPrice;
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
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setTotalPriceWithVat($totalPriceWithVat = null)
    {
        $this->totalPriceWithVat = $totalPriceWithVat;
        return $this;
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
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
        return $this;
    }
    /**
     * Get billnum value
     * @return string|null
     */
    public function getBillnum()
    {
        return $this->billnum;
    }
    /**
     * Set billnum value
     * @param string $billnum
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setBillnum($billnum = null)
    {
        // validation for constraint: string
        if (!is_null($billnum) && !is_string($billnum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billnum)), __LINE__);
        }
        $this->billnum = $billnum;
        return $this;
    }
    /**
     * Get details value
     * @return \PayPal\ArrayType\MyArrayOfBillingInvoiceDetailStructType|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param \PayPal\ArrayType\MyArrayOfBillingInvoiceDetailStructType $details
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setDetails(\PayPal\ArrayType\MyArrayOfBillingInvoiceDetailStructType $details = null)
    {
        $this->details = $details;
        return $this;
    }
    /**
     * Get domains value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getDomains()
    {
        return $this->domains;
    }
    /**
     * Set domains value
     * @param \PayPal\ArrayType\MyArrayOfStringType $domains
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setDomains(\PayPal\ArrayType\MyArrayOfStringType $domains = null)
    {
        $this->domains = $domains;
        return $this;
    }
    /**
     * Get billingCountry value
     * @return string|null
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }
    /**
     * Set billingCountry value
     * @param string $billingCountry
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setBillingCountry($billingCountry = null)
    {
        // validation for constraint: string
        if (!is_null($billingCountry) && !is_string($billingCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingCountry)), __LINE__);
        }
        $this->billingCountry = $billingCountry;
        return $this;
    }
    /**
     * Get ordernum value
     * @return string|null
     */
    public function getOrdernum()
    {
        return $this->ordernum;
    }
    /**
     * Set ordernum value
     * @param string $ordernum
     * @return \PayPal\StructType\BillingInvoiceStruct
     */
    public function setOrdernum($ordernum = null)
    {
        // validation for constraint: string
        if (!is_null($ordernum) && !is_string($ordernum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ordernum)), __LINE__);
        }
        $this->ordernum = $ordernum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BillingInvoiceStruct
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
