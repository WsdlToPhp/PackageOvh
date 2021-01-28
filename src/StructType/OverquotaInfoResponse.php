<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for overquotaInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OverquotaInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\OverquotaInfoReturn
     */
    public $return;
    /**
     * Constructor method for overquotaInfoResponse
     * @uses OverquotaInfoResponse::setReturn()
     * @param \Ovh\StructType\OverquotaInfoReturn $return
     */
    public function __construct(\Ovh\StructType\OverquotaInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\OverquotaInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\OverquotaInfoReturn $return
     * @return \Ovh\StructType\OverquotaInfoResponse
     */
    public function setReturn(\Ovh\StructType\OverquotaInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
