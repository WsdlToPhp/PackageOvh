<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFilterIrcClientRuleListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFilterIrcClientRuleListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedFilterIrcRuleStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedFilterIrcClientRuleListResponse
     * @uses DedicatedFilterIrcClientRuleListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedFilterIrcRuleStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedFilterIrcRuleStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedFilterIrcRuleStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedFilterIrcRuleStructType $return
     * @return \Ovh\StructType\DedicatedFilterIrcClientRuleListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedFilterIrcRuleStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
