<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingGetReferencesToExpiredResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingGetReferencesToExpiredResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfBillingGetReferencesToExpiredStructType
     */
    public $return;
    /**
     * Constructor method for billingGetReferencesToExpiredResponse
     * @uses BillingGetReferencesToExpiredResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfBillingGetReferencesToExpiredStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfBillingGetReferencesToExpiredStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfBillingGetReferencesToExpiredStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfBillingGetReferencesToExpiredStructType $return
     * @return \Ovh\StructType\BillingGetReferencesToExpiredResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfBillingGetReferencesToExpiredStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
