<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNicGetSipDomainResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNicGetSipDomainResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonySipDomainStructType
     */
    public $return;
    /**
     * Constructor method for telephonyNicGetSipDomainResponse
     * @uses TelephonyNicGetSipDomainResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySipDomainStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySipDomainStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySipDomainStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySipDomainStructType $return
     * @return \Ovh\StructType\TelephonyNicGetSipDomainResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonySipDomainStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
