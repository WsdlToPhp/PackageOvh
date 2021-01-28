<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingAccessByNicResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingAccessByNicResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $return;
    /**
     * Constructor method for hostingAccessByNicResponse
     * @uses HostingAccessByNicResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfStringType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfStringType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfStringType $return
     * @return \Ovh\StructType\HostingAccessByNicResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfStringType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
