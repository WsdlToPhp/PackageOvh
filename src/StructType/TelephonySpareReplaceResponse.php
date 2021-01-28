<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareReplaceResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareReplaceResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn
     */
    public $return;
    /**
     * Constructor method for telephonySpareReplaceResponse
     * @uses TelephonySpareReplaceResponse::setReturn()
     * @param \Ovh\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn $return
     * @return \Ovh\StructType\TelephonySpareReplaceResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
