<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsListCsvAttachmentResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsListCsvAttachmentResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonySmsCsvSlotStructType
     */
    public $return;
    /**
     * Constructor method for telephonySmsListCsvAttachmentResponse
     * @uses TelephonySmsListCsvAttachmentResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsCsvSlotStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySmsCsvSlotStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySmsCsvSlotStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsCsvSlotStructType $return
     * @return \Ovh\StructType\TelephonySmsListCsvAttachmentResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonySmsCsvSlotStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
