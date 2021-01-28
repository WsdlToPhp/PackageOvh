<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsBlacklistedSendersListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsBlacklistedSendersListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn
     */
    public $return;
    /**
     * Constructor method for telephonySmsBlacklistedSendersListResponse
     * @uses TelephonySmsBlacklistedSendersListResponse::setReturn()
     * @param \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonySmsBlacklistedSendersListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn $return
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySmsBlacklistedSendersListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
