<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mailingListFullInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MailingListFullInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\MailingListFullInfoReturn
     */
    public $return;
    /**
     * Constructor method for mailingListFullInfoResponse
     * @uses MailingListFullInfoResponse::setReturn()
     * @param \Ovh\StructType\MailingListFullInfoReturn $return
     */
    public function __construct(\Ovh\StructType\MailingListFullInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\MailingListFullInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\MailingListFullInfoReturn $return
     * @return \Ovh\StructType\MailingListFullInfoResponse
     */
    public function setReturn(\Ovh\StructType\MailingListFullInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
