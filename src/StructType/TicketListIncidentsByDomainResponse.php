<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketListIncidentsByDomainResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketListIncidentsByDomainResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTicketStructType
     */
    public $return;
    /**
     * Constructor method for ticketListIncidentsByDomainResponse
     * @uses TicketListIncidentsByDomainResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTicketStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTicketStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTicketStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTicketStructType $return
     * @return \Ovh\StructType\TicketListIncidentsByDomainResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTicketStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
