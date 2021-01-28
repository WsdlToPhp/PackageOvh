<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsGetUserQuotaForUserResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsGetUserQuotaForUserResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySmsUserQuotaStruct
     */
    public $return;
    /**
     * Constructor method for telephonySmsGetUserQuotaForUserResponse
     * @uses TelephonySmsGetUserQuotaForUserResponse::setReturn()
     * @param \Ovh\StructType\TelephonySmsUserQuotaStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonySmsUserQuotaStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySmsUserQuotaStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySmsUserQuotaStruct $return
     * @return \Ovh\StructType\TelephonySmsGetUserQuotaForUserResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySmsUserQuotaStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
