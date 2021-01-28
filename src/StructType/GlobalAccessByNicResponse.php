<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for globalAccessByNicResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GlobalAccessByNicResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfGlobalAccessStructType
     */
    public $return;
    /**
     * Constructor method for globalAccessByNicResponse
     * @uses GlobalAccessByNicResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfGlobalAccessStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfGlobalAccessStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfGlobalAccessStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfGlobalAccessStructType $return
     * @return \Ovh\StructType\GlobalAccessByNicResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfGlobalAccessStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
