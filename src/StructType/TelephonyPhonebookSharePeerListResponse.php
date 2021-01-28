<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookSharePeerListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookSharePeerListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyPhonebookSharePeerStructType
     */
    public $return;
    /**
     * Constructor method for telephonyPhonebookSharePeerListResponse
     * @uses TelephonyPhonebookSharePeerListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPhonebookSharePeerStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookSharePeerStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyPhonebookSharePeerStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPhonebookSharePeerStructType $return
     * @return \Ovh\StructType\TelephonyPhonebookSharePeerListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyPhonebookSharePeerStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
