<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for popGetQuotaResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PopGetQuotaResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\PopGetQuotaReturn
     */
    public $return;
    /**
     * Constructor method for popGetQuotaResponse
     * @uses PopGetQuotaResponse::setReturn()
     * @param \Ovh\StructType\PopGetQuotaReturn $return
     */
    public function __construct(\Ovh\StructType\PopGetQuotaReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\PopGetQuotaReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\PopGetQuotaReturn $return
     * @return \Ovh\StructType\PopGetQuotaResponse
     */
    public function setReturn(\Ovh\StructType\PopGetQuotaReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
