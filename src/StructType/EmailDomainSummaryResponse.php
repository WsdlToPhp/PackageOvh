<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailDomainSummaryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailDomainSummaryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\EmailDomainSummaryReturn
     */
    public $return;
    /**
     * Constructor method for emailDomainSummaryResponse
     * @uses EmailDomainSummaryResponse::setReturn()
     * @param \Ovh\StructType\EmailDomainSummaryReturn $return
     */
    public function __construct(\Ovh\StructType\EmailDomainSummaryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\EmailDomainSummaryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\EmailDomainSummaryReturn $return
     * @return \Ovh\StructType\EmailDomainSummaryResponse
     */
    public function setReturn(\Ovh\StructType\EmailDomainSummaryReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
