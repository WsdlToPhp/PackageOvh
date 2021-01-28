<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineLogsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineLogsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyLineLogsStruct
     */
    public $return;
    /**
     * Constructor method for telephonyLineLogsResponse
     * @uses TelephonyLineLogsResponse::setReturn()
     * @param \Ovh\StructType\TelephonyLineLogsStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonyLineLogsStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyLineLogsStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyLineLogsStruct $return
     * @return \Ovh\StructType\TelephonyLineLogsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyLineLogsStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
