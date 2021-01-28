<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserAddCsvAttachmentResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserAddCsvAttachmentResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySmsCsvSlotStruct
     */
    public $return;
    /**
     * Constructor method for telephonySmsUserAddCsvAttachmentResponse
     * @uses TelephonySmsUserAddCsvAttachmentResponse::setReturn()
     * @param \Ovh\StructType\TelephonySmsCsvSlotStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonySmsCsvSlotStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySmsCsvSlotStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySmsCsvSlotStruct $return
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachmentResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySmsCsvSlotStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
