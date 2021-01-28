<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceListPaginatedResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceListPaginatedResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\ServiceListPaginatedStruct
     */
    public $return;
    /**
     * Constructor method for serviceListPaginatedResponse
     * @uses ServiceListPaginatedResponse::setReturn()
     * @param \Ovh\StructType\ServiceListPaginatedStruct $return
     */
    public function __construct(\Ovh\StructType\ServiceListPaginatedStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\ServiceListPaginatedStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\ServiceListPaginatedStruct $return
     * @return \Ovh\StructType\ServiceListPaginatedResponse
     */
    public function setReturn(\Ovh\StructType\ServiceListPaginatedStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
