<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfHostingListStructType
     */
    public $return;
    /**
     * Constructor method for hostingListResponse
     * @uses HostingListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfHostingListStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfHostingListStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfHostingListStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfHostingListStructType $return
     * @return \Ovh\StructType\HostingListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfHostingListStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
