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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\BillingInvoiceListResponse
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
