<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookOnSmsListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookOnSmsListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyPhonebookStructType
     */
    public $return;
    /**
     * Constructor method for telephonyPhonebookOnSmsListResponse
     * @uses TelephonyPhonebookOnSmsListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPhonebookStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyPhonebookStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPhonebookStructType $return
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
