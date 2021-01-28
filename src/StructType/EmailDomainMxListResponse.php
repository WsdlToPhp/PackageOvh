<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailDomainMxListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailDomainMxListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfZoneStructType
     */
    public $return;
    /**
     * Constructor method for emailDomainMxListResponse
     * @uses EmailDomainMxListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfZoneStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfZoneStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfZoneStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfZoneStructType $return
     * @return \Ovh\StructType\EmailDomainMxListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfZoneStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
