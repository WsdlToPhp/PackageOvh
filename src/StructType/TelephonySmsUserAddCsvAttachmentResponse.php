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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachmentResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
