<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\FullTicketReturn
     */
    public $return;
    /**
     * Constructor method for ticketGetResponse
     * @uses TicketGetResponse::setReturn()
     * @param \Ovh\StructType\FullTicketReturn $return
     */
    public function __construct(\Ovh\StructType\FullTicketReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\FullTicketReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\FullTicketReturn $return
     * @return \Ovh\StructType\TicketGetResponse
     */
    public function setReturn(\Ovh\StructType\FullTicketReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
