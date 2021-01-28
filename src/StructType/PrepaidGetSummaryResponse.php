<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidGetSummaryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidGetSummaryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\PrepaidGetSummaryReturn
     */
    public $return;
    /**
     * Constructor method for prepaidGetSummaryResponse
     * @uses PrepaidGetSummaryResponse::setReturn()
     * @param \Ovh\StructType\PrepaidGetSummaryReturn $return
     */
    public function __construct(\Ovh\StructType\PrepaidGetSummaryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\PrepaidGetSummaryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\PrepaidGetSummaryReturn $return
     * @return \Ovh\StructType\PrepaidGetSummaryResponse
     */
    public function setReturn(\Ovh\StructType\PrepaidGetSummaryReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
