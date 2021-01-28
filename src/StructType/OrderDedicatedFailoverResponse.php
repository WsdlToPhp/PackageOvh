<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderDedicatedFailoverResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderDedicatedFailoverResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\OrderStruct
     */
    public $return;
    /**
     * Constructor method for orderDedicatedFailoverResponse
     * @uses OrderDedicatedFailoverResponse::setReturn()
     * @param \Ovh\StructType\OrderStruct $return
     */
    public function __construct(\Ovh\StructType\OrderStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\OrderStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\OrderStruct $return
     * @return \Ovh\StructType\OrderDedicatedFailoverResponse
     */
    public function setReturn(\Ovh\StructType\OrderStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
