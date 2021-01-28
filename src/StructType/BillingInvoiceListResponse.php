<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingInvoiceListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingInvoiceListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfBillingInvoiceStructType
     */
    public $return;
    /**
     * Constructor method for billingInvoiceListResponse
     * @uses BillingInvoiceListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfBillingInvoiceStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfBillingInvoiceStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfBillingInvoiceStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfBillingInvoiceStructType $return
     * @return \Ovh\StructType\BillingInvoiceListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfBillingInvoiceStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
