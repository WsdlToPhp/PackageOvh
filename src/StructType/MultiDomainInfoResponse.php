<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiDomainInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiDomainInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\MultiDomainStruct
     */
    public $return;
    /**
     * Constructor method for multiDomainInfoResponse
     * @uses MultiDomainInfoResponse::setReturn()
     * @param \Ovh\StructType\MultiDomainStruct $return
     */
    public function __construct(\Ovh\StructType\MultiDomainStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\MultiDomainStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\MultiDomainStruct $return
     * @return \Ovh\StructType\MultiDomainInfoResponse
     */
    public function setReturn(\Ovh\StructType\MultiDomainStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
