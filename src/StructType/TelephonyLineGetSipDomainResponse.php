<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineGetSipDomainResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineGetSipDomainResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySipDomainStruct
     */
    public $return;
    /**
     * Constructor method for telephonyLineGetSipDomainResponse
     * @uses TelephonyLineGetSipDomainResponse::setReturn()
     * @param \Ovh\StructType\TelephonySipDomainStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonySipDomainStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySipDomainStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySipDomainStruct $return
     * @return \Ovh\StructType\TelephonyLineGetSipDomainResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySipDomainStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
