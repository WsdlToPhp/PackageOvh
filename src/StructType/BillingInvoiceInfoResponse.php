<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingInvoiceInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingInvoiceInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\BillingInvoiceInfoReturn
     */
    public $return;
    /**
     * Constructor method for billingInvoiceInfoResponse
     * @uses BillingInvoiceInfoResponse::setReturn()
     * @param \Ovh\StructType\BillingInvoiceInfoReturn $return
     */
    public function __construct(\Ovh\StructType\BillingInvoiceInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\BillingInvoiceInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\BillingInvoiceInfoReturn $return
     * @return \Ovh\StructType\BillingInvoiceInfoResponse
     */
    public function setReturn(\Ovh\StructType\BillingInvoiceInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
