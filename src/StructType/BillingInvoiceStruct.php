<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfBillingInvoiceDetailStructType
     */
    public $details;
    /**
     * The domains
     * @var \Ovh\ArrayType\MyArrayOfStringType
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
     * @param \Ovh\ArrayType\MyArrayOfBillingInvoiceDetailStructType $details
     * @param \Ovh\ArrayType\MyArrayOfStringType $domains
     * @param string $billingCountry
     * @param string $ordernum
     */
    public function __construct($vat = null, $totalPrice = null, $totalPriceWithVat = null, $date = null, $nic = null, $billnum = null, \Ovh\ArrayType\MyArrayOfBillingInvoiceDetailStructType $details = null, \Ovh\ArrayType\MyArrayOfStringType $domains = null, $billingCountry = null, $ordernum = null)
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
     * @return \Ovh\StructType\BillingInvoiceStruct
     */
    public function setVat($vat = null)
    {
        // validation for constraint: float
        if (!is_null($vat) && !(is_float($vat) || is_numeric($vat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat, true), gettype($vat)), __LINE__);
        }
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
     * @return \Ovh\StructType\BillingInvoiceStruct
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
     * @return \Ovh\StructType\BillingInvoiceStruct
     */
    public function setTotalPriceWithVat($totalPriceWithVat = null)
    {
        // validation for constraint: float
        if (!is_null($totalPriceWithVat) && !(is_float($totalPriceWithVat) || is_numeric($totalPriceWithVat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPriceWithVat, true), gettype($totalPriceWithVat)), __LINE__);
        }
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
     * @return \Ovh\StructType\BillingInvoiceStruct
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
     * @return \Ovh\StructType\BillingInvoiceStruct
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nic, true), gettype($nic)), __LINE__);
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
     * @return \Ovh\StructType\BillingInvoiceStruct
     */
    public function setBillnum($billnum = null)
    {
        // validation for constraint: string
        if (!is_null($billnum) && !is_string($billnum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billnum, true), gettype($billnum)), __LINE__);
        }
        $this->billnum = $billnum;
        return $this;
    }
    /**
     * Get details value
     * @return \Ovh\ArrayType\MyArrayOfBillingInvoiceDetailStructType|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param \Ovh\ArrayType\MyArrayOfBillingInvoiceDetailStructType $details
     * @return \Ovh\StructType\BillingInvoiceStruct
     */
    public function setDetails(\Ovh\ArrayType\MyArrayOfBillingInvoiceDetailStructType $details = null)
    {
        $this->details = $details;
        return $this;
    }
    /**
     * Get domains value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getDomains()
    {
        return $this->domains;
    }
    /**
     * Set domains value
     * @param \Ovh\ArrayType\MyArrayOfStringType $domains
     * @return \Ovh\StructType\BillingInvoiceStruct
     */
    public function setDomains(\Ovh\ArrayType\MyArrayOfStringType $domains = null)
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
     * @return \Ovh\StructType\BillingInvoiceStruct
     */
    public function setBillingCountry($billingCountry = null)
    {
        // validation for constraint: string
        if (!is_null($billingCountry) && !is_string($billingCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingCountry, true), gettype($billingCountry)), __LINE__);
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
     * @return \Ovh\StructType\BillingInvoiceStruct
     */
    public function setOrdernum($ordernum = null)
    {
        // validation for constraint: string
        if (!is_null($ordernum) && !is_string($ordernum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ordernum, true), gettype($ordernum)), __LINE__);
        }
        $this->ordernum = $ordernum;
        return $this;
    }
}
