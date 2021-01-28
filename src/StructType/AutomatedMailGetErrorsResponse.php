<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for automatedMailGetErrorsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutomatedMailGetErrorsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfAutomatedMailGetErrorsStructType
     */
    public $return;
    /**
     * Constructor method for automatedMailGetErrorsResponse
     * @uses AutomatedMailGetErrorsResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfAutomatedMailGetErrorsStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfAutomatedMailGetErrorsStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfAutomatedMailGetErrorsStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfAutomatedMailGetErrorsStructType $return
     * @return \Ovh\StructType\AutomatedMailGetErrorsResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfAutomatedMailGetErrorsStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
