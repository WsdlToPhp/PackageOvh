<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for popInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PopInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\PopStruct
     */
    public $return;
    /**
     * Constructor method for popInfoResponse
     * @uses PopInfoResponse::setReturn()
     * @param \Ovh\StructType\PopStruct $return
     */
    public function __construct(\Ovh\StructType\PopStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\PopStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\PopStruct $return
     * @return \Ovh\StructType\PopInfoResponse
     */
    public function setReturn(\Ovh\StructType\PopStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
