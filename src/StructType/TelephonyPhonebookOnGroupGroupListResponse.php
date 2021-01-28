<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookOnGroupGroupListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookOnGroupGroupListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType
     */
    public $return;
    /**
     * Constructor method for telephonyPhonebookOnGroupGroupListResponse
     * @uses TelephonyPhonebookOnGroupGroupListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType $return
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupGroupListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
