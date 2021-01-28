<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountSummaryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccountSummaryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\AccountSummaryReturn
     */
    public $return;
    /**
     * Constructor method for accountSummaryResponse
     * @uses AccountSummaryResponse::setReturn()
     * @param \Ovh\StructType\AccountSummaryReturn $return
     */
    public function __construct(\Ovh\StructType\AccountSummaryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\AccountSummaryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\AccountSummaryReturn $return
     * @return \Ovh\StructType\AccountSummaryResponse
     */
    public function setReturn(\Ovh\StructType\AccountSummaryReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
