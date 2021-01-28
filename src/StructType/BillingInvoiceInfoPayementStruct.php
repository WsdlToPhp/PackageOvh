<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingInvoiceInfoPayementStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingInvoiceInfoPayementStruct extends AbstractStructBase
{
    /**
     * The finaldate
     * @var string
     */
    public $finaldate;
    /**
     * The deposit_date
     * @var string
     */
    public $deposit_date;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The customerid
     * @var string
     */
    public $customerid;
    /**
     * The paymentmean
     * @var string
     */
    public $paymentmean;
    /**
     * The paymentdate
     * @var string
     */
    public $paymentdate;
    /**
     * The orderid
     * @var int
     */
    public $orderid;
    /**
     * Constructor method for billingInvoiceInfoPayementStruct
     * @uses BillingInvoiceInfoPayementStruct::setFinaldate()
     * @uses BillingInvoiceInfoPayementStruct::setDeposit_date()
     * @uses BillingInvoiceInfoPayementStruct::setStatus()
     * @uses BillingInvoiceInfoPayementStruct::setCustomerid()
     * @uses BillingInvoiceInfoPayementStruct::setPaymentmean()
     * @uses BillingInvoiceInfoPayementStruct::setPaymentdate()
     * @uses BillingInvoiceInfoPayementStruct::setOrderid()
     * @param string $finaldate
     * @param string $deposit_date
     * @param string $status
     * @param string $customerid
     * @param string $paymentmean
     * @param string $paymentdate
     * @param int $orderid
     */
    public function __construct($finaldate = null, $deposit_date = null, $status = null, $customerid = null, $paymentmean = null, $paymentdate = null, $orderid = null)
    {
        $this
            ->setFinaldate($finaldate)
            ->setDeposit_date($deposit_date)
            ->setStatus($status)
            ->setCustomerid($customerid)
            ->setPaymentmean($paymentmean)
            ->setPaymentdate($paymentdate)
            ->setOrderid($orderid);
    }
    /**
     * Get finaldate value
     * @return string|null
     */
    public function getFinaldate()
    {
        return $this->finaldate;
    }
    /**
     * Set finaldate value
     * @param string $finaldate
     * @return \Ovh\StructType\BillingInvoiceInfoPayementStruct
     */
    public function setFinaldate($finaldate = null)
    {
        // validation for constraint: string
        if (!is_null($finaldate) && !is_string($finaldate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finaldate, true), gettype($finaldate)), __LINE__);
        }
        $this->finaldate = $finaldate;
        return $this;
    }
    /**
     * Get deposit_date value
     * @return string|null
     */
    public function getDeposit_date()
    {
        return $this->deposit_date;
    }
    /**
     * Set deposit_date value
     * @param string $deposit_date
     * @return \Ovh\StructType\BillingInvoiceInfoPayementStruct
     */
    public function setDeposit_date($deposit_date = null)
    {
        // validation for constraint: string
        if (!is_null($deposit_date) && !is_string($deposit_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deposit_date, true), gettype($deposit_date)), __LINE__);
        }
        $this->deposit_date = $deposit_date;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Ovh\StructType\BillingInvoiceInfoPayementStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get customerid value
     * @return string|null
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }
    /**
     * Set customerid value
     * @param string $customerid
     * @return \Ovh\StructType\BillingInvoiceInfoPayementStruct
     */
    public function setCustomerid($customerid = null)
    {
        // validation for constraint: string
        if (!is_null($customerid) && !is_string($customerid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerid, true), gettype($customerid)), __LINE__);
        }
        $this->customerid = $customerid;
        return $this;
    }
    /**
     * Get paymentmean value
     * @return string|null
     */
    public function getPaymentmean()
    {
        return $this->paymentmean;
    }
    /**
     * Set paymentmean value
     * @param string $paymentmean
     * @return \Ovh\StructType\BillingInvoiceInfoPayementStruct
     */
    public function setPaymentmean($paymentmean = null)
    {
        // validation for constraint: string
        if (!is_null($paymentmean) && !is_string($paymentmean)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentmean, true), gettype($paymentmean)), __LINE__);
        }
        $this->paymentmean = $paymentmean;
        return $this;
    }
    /**
     * Get paymentdate value
     * @return string|null
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }
    /**
     * Set paymentdate value
     * @param string $paymentdate
     * @return \Ovh\StructType\BillingInvoiceInfoPayementStruct
     */
    public function setPaymentdate($paymentdate = null)
    {
        // validation for constraint: string
        if (!is_null($paymentdate) && !is_string($paymentdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentdate, true), gettype($paymentdate)), __LINE__);
        }
        $this->paymentdate = $paymentdate;
        return $this;
    }
    /**
     * Get orderid value
     * @return int|null
     */
    public function getOrderid()
    {
        return $this->orderid;
    }
    /**
     * Set orderid value
     * @param int $orderid
     * @return \Ovh\StructType\BillingInvoiceInfoPayementStruct
     */
    public function setOrderid($orderid = null)
    {
        // validation for constraint: int
        if (!is_null($orderid) && !(is_int($orderid) || ctype_digit($orderid))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderid, true), gettype($orderid)), __LINE__);
        }
        $this->orderid = $orderid;
        return $this;
    }
}
