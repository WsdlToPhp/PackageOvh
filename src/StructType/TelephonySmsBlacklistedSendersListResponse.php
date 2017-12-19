<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsBlacklistedSendersListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsBlacklistedSendersListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn
     */
    public $return;
    /**
     * Constructor method for telephonySmsBlacklistedSendersListResponse
     * @uses TelephonySmsBlacklistedSendersListResponse::setReturn()
     * @param \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonySmsBlacklistedSendersListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn $return
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySmsBlacklistedSendersListReturn $return = null)
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
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersListResponse
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
