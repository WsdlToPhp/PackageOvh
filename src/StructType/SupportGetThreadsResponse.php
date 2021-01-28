<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportGetThreadsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportGetThreadsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSupportThreadDetailStructType
     */
    public $return;
    /**
     * Constructor method for supportGetThreadsResponse
     * @uses SupportGetThreadsResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSupportThreadDetailStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSupportThreadDetailStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSupportThreadDetailStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSupportThreadDetailStructType $return
     * @return \Ovh\StructType\SupportGetThreadsResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSupportThreadDetailStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
