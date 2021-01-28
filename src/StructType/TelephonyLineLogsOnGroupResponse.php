<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineLogsOnGroupResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineLogsOnGroupResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyLineLogsStructType
     */
    public $return;
    /**
     * Constructor method for telephonyLineLogsOnGroupResponse
     * @uses TelephonyLineLogsOnGroupResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineLogsStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyLineLogsStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyLineLogsStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineLogsStructType $return
     * @return \Ovh\StructType\TelephonyLineLogsOnGroupResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyLineLogsStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
