<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainOperationInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainOperationInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\OperationStruct
     */
    public $return;
    /**
     * Constructor method for domainOperationInfoResponse
     * @uses DomainOperationInfoResponse::setReturn()
     * @param \Ovh\StructType\OperationStruct $return
     */
    public function __construct(\Ovh\StructType\OperationStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\OperationStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\OperationStruct $return
     * @return \Ovh\StructType\DomainOperationInfoResponse
     */
    public function setReturn(\Ovh\StructType\OperationStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
