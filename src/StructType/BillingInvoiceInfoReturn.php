<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingInvoiceInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingInvoiceInfoReturn extends AbstractStructBase
{
    /**
     * The billnum
     * @var string
     */
    public $billnum;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The nicbilling
     * @var string
     */
    public $nicbilling;
    /**
     * The baseprice
     * @var string
     */
    public $baseprice;
    /**
     * The finalprice
     * @var float
     */
    public $finalprice;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The order
     * @var string
     */
    public $order;
    /**
     * The nicorder
     * @var string
     */
    public $nicorder;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The taxrate
     * @var float
     */
    public $taxrate;
    /**
     * The tax
     * @var float
     */
    public $tax;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The details
     * @var \PayPal\ArrayType\MyArrayOfBillingInvoiceInfoDetailStructType
     */
    public $details;
    /**
     * The payment
     * @var \PayPal\StructType\BillingInvoiceInfoPayementStruct
     */
    public $payment;
    /**
     * Constructor method for billingInvoiceInfoReturn
     * @uses BillingInvoiceInfoReturn::setBillnum()
     * @uses BillingInvoiceInfoReturn::setDate()
     * @uses BillingInvoiceInfoReturn::setNicbilling()
     * @uses BillingInvoiceInfoReturn::setBaseprice()
     * @uses BillingInvoiceInfoReturn::setFinalprice()
     * @uses BillingInvoiceInfoReturn::setPassword()
     * @uses BillingInvoiceInfoReturn::setOrder()
     * @uses BillingInvoiceInfoReturn::setNicorder()
     * @uses BillingInvoiceInfoReturn::setCountry()
     * @uses BillingInvoiceInfoReturn::setTaxrate()
     * @uses BillingInvoiceInfoReturn::setTax()
     * @uses BillingInvoiceInfoReturn::setType()
     * @uses BillingInvoiceInfoReturn::setDetails()
     * @uses BillingInvoiceInfoReturn::setPayment()
     * @param string $billnum
     * @param string $date
     * @param string $nicbilling
     * @param string $baseprice
     * @param float $finalprice
     * @param string $password
     * @param string $order
     * @param string $nicorder
     * @param string $country
     * @param float $taxrate
     * @param float $tax
     * @param string $type
     * @param \PayPal\ArrayType\MyArrayOfBillingInvoiceInfoDetailStructType $details
     * @param \PayPal\StructType\BillingInvoiceInfoPayementStruct $payment
     */
    public function __construct($billnum = null, $date = null, $nicbilling = null, $baseprice = null, $finalprice = null, $password = null, $order = null, $nicorder = null, $country = null, $taxrate = null, $tax = null, $type = null, \PayPal\ArrayType\MyArrayOfBillingInvoiceInfoDetailStructType $details = null, \PayPal\StructType\BillingInvoiceInfoPayementStruct $payment = null)
    {
        $this
            ->setBillnum($billnum)
            ->setDate($date)
            ->setNicbilling($nicbilling)
            ->setBaseprice($baseprice)
            ->setFinalprice($finalprice)
            ->setPassword($password)
            ->setOrder($order)
            ->setNicorder($nicorder)
            ->setCountry($country)
            ->setTaxrate($taxrate)
            ->setTax($tax)
            ->setType($type)
            ->setDetails($details)
            ->setPayment($payment);
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
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
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
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
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
     * Get nicbilling value
     * @return string|null
     */
    public function getNicbilling()
    {
        return $this->nicbilling;
    }
    /**
     * Set nicbilling value
     * @param string $nicbilling
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setNicbilling($nicbilling = null)
    {
        // validation for constraint: string
        if (!is_null($nicbilling) && !is_string($nicbilling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicbilling)), __LINE__);
        }
        $this->nicbilling = $nicbilling;
        return $this;
    }
    /**
     * Get baseprice value
     * @return string|null
     */
    public function getBaseprice()
    {
        return $this->baseprice;
    }
    /**
     * Set baseprice value
     * @param string $baseprice
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setBaseprice($baseprice = null)
    {
        // validation for constraint: string
        if (!is_null($baseprice) && !is_string($baseprice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseprice)), __LINE__);
        }
        $this->baseprice = $baseprice;
        return $this;
    }
    /**
     * Get finalprice value
     * @return float|null
     */
    public function getFinalprice()
    {
        return $this->finalprice;
    }
    /**
     * Set finalprice value
     * @param float $finalprice
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setFinalprice($finalprice = null)
    {
        $this->finalprice = $finalprice;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get order value
     * @return string|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param string $order
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setOrder($order = null)
    {
        // validation for constraint: string
        if (!is_null($order) && !is_string($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order)), __LINE__);
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Get nicorder value
     * @return string|null
     */
    public function getNicorder()
    {
        return $this->nicorder;
    }
    /**
     * Set nicorder value
     * @param string $nicorder
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setNicorder($nicorder = null)
    {
        // validation for constraint: string
        if (!is_null($nicorder) && !is_string($nicorder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicorder)), __LINE__);
        }
        $this->nicorder = $nicorder;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get taxrate value
     * @return float|null
     */
    public function getTaxrate()
    {
        return $this->taxrate;
    }
    /**
     * Set taxrate value
     * @param float $taxrate
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setTaxrate($taxrate = null)
    {
        $this->taxrate = $taxrate;
        return $this;
    }
    /**
     * Get tax value
     * @return float|null
     */
    public function getTax()
    {
        return $this->tax;
    }
    /**
     * Set tax value
     * @param float $tax
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setTax($tax = null)
    {
        $this->tax = $tax;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get details value
     * @return \PayPal\ArrayType\MyArrayOfBillingInvoiceInfoDetailStructType|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param \PayPal\ArrayType\MyArrayOfBillingInvoiceInfoDetailStructType $details
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setDetails(\PayPal\ArrayType\MyArrayOfBillingInvoiceInfoDetailStructType $details = null)
    {
        $this->details = $details;
        return $this;
    }
    /**
     * Get payment value
     * @return \PayPal\StructType\BillingInvoiceInfoPayementStruct|null
     */
    public function getPayment()
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param \PayPal\StructType\BillingInvoiceInfoPayementStruct $payment
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
     */
    public function setPayment(\PayPal\StructType\BillingInvoiceInfoPayementStruct $payment = null)
    {
        $this->payment = $payment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BillingInvoiceInfoReturn
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
