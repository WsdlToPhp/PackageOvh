<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketListContactResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketListContactResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTicketContactStructType
     */
    public $return;
    /**
     * Constructor method for ticketListContactResponse
     * @uses TicketListContactResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTicketContactStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTicketContactStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTicketContactStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTicketContactStructType $return
     * @return \Ovh\StructType\TicketListContactResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTicketContactStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
