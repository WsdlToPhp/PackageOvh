<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mailingListListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MailingListListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfMailingListStructType
     */
    public $return;
    /**
     * Constructor method for mailingListListResponse
     * @uses MailingListListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfMailingListStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfMailingListStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfMailingListStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfMailingListStructType $return
     * @return \Ovh\StructType\MailingListListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfMailingListStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
