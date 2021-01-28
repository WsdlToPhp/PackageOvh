<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nicInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NicInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\NicInfoReturn
     */
    public $return;
    /**
     * Constructor method for nicInfoResponse
     * @uses NicInfoResponse::setReturn()
     * @param \Ovh\StructType\NicInfoReturn $return
     */
    public function __construct(\Ovh\StructType\NicInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\NicInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\NicInfoReturn $return
     * @return \Ovh\StructType\NicInfoResponse
     */
    public function setReturn(\Ovh\StructType\NicInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
