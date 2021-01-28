<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySecurityDepositCreditResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySecurityDepositCreditResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySecurityDepositCreditReturn
     */
    public $return;
    /**
     * Constructor method for telephonySecurityDepositCreditResponse
     * @uses TelephonySecurityDepositCreditResponse::setReturn()
     * @param \Ovh\StructType\TelephonySecurityDepositCreditReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonySecurityDepositCreditReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySecurityDepositCreditReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySecurityDepositCreditReturn $return
     * @return \Ovh\StructType\TelephonySecurityDepositCreditResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySecurityDepositCreditReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
