<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nicPublicInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NicPublicInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\NicPublicInfoReturn
     */
    public $return;
    /**
     * Constructor method for nicPublicInfoResponse
     * @uses NicPublicInfoResponse::setReturn()
     * @param \Ovh\StructType\NicPublicInfoReturn $return
     */
    public function __construct(\Ovh\StructType\NicPublicInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\NicPublicInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\NicPublicInfoReturn $return
     * @return \Ovh\StructType\NicPublicInfoResponse
     */
    public function setReturn(\Ovh\StructType\NicPublicInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
