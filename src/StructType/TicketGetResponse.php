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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TicketGetResponse
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
