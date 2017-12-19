<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailGetDomainCatchAllResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailGetDomainCatchAllResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\CatchAllGetReturn
     */
    public $return;
    /**
     * Constructor method for emailGetDomainCatchAllResponse
     * @uses EmailGetDomainCatchAllResponse::setReturn()
     * @param \Ovh\StructType\CatchAllGetReturn $return
     */
    public function __construct(\Ovh\StructType\CatchAllGetReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\CatchAllGetReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\CatchAllGetReturn $return
     * @return \Ovh\StructType\EmailGetDomainCatchAllResponse
     */
    public function setReturn(\Ovh\StructType\CatchAllGetReturn $return = null)
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
     * @return \Ovh\StructType\EmailGetDomainCatchAllResponse
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
