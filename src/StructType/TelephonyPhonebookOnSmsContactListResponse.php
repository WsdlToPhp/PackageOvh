<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookOnSmsContactListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookOnSmsContactListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyPhonebookContactStructType
     */
    public $return;
    /**
     * Constructor method for telephonyPhonebookOnSmsContactListResponse
     * @uses TelephonyPhonebookOnSmsContactListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPhonebookContactStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookContactStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyPhonebookContactStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPhonebookContactStructType $return
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsContactListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookContactStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
