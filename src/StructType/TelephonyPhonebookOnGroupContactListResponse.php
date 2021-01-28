<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookOnGroupContactListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookOnGroupContactListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyPhonebookContactStructType
     */
    public $return;
    /**
     * Constructor method for telephonyPhonebookOnGroupContactListResponse
     * @uses TelephonyPhonebookOnGroupContactListResponse::setReturn()
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
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupContactListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookContactStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
