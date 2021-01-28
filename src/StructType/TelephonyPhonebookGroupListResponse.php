<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookGroupListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookGroupListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType
     */
    public $return;
    /**
     * Constructor method for telephonyPhonebookGroupListResponse
     * @uses TelephonyPhonebookGroupListResponse::setReturn()
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
     * @return \Ovh\StructType\TelephonyPhonebookGroupListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
