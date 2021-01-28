<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportGetFullMessageResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportGetFullMessageResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\SupportMessageDetailReturn
     */
    public $return;
    /**
     * Constructor method for supportGetFullMessageResponse
     * @uses SupportGetFullMessageResponse::setReturn()
     * @param \Ovh\StructType\SupportMessageDetailReturn $return
     */
    public function __construct(\Ovh\StructType\SupportMessageDetailReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\SupportMessageDetailReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\SupportMessageDetailReturn $return
     * @return \Ovh\StructType\SupportGetFullMessageResponse
     */
    public function setReturn(\Ovh\StructType\SupportMessageDetailReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
