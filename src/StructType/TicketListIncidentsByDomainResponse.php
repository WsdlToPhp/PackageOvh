<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfTicketStructType
     */
    public $return;
    /**
     * Constructor method for ticketListIncidentsByDomainResponse
     * @uses TicketListIncidentsByDomainResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfTicketStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfTicketStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfTicketStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfTicketStructType $return
     * @return \PayPal\StructType\TicketListIncidentsByDomainResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfTicketStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TicketListIncidentsByDomainResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
