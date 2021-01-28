<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportSendMessageResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportSendMessageResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\SupportSendMessageReturn
     */
    public $return;
    /**
     * Constructor method for supportSendMessageResponse
     * @uses SupportSendMessageResponse::setReturn()
     * @param \Ovh\StructType\SupportSendMessageReturn $return
     */
    public function __construct(\Ovh\StructType\SupportSendMessageReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\SupportSendMessageReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\SupportSendMessageReturn $return
     * @return \Ovh\StructType\SupportSendMessageResponse
     */
    public function setReturn(\Ovh\StructType\SupportSendMessageReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
