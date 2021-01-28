<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for anonymousFtpInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AnonymousFtpInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\AnonymousFtpInfoReturn
     */
    public $return;
    /**
     * Constructor method for anonymousFtpInfoResponse
     * @uses AnonymousFtpInfoResponse::setReturn()
     * @param \Ovh\StructType\AnonymousFtpInfoReturn $return
     */
    public function __construct(\Ovh\StructType\AnonymousFtpInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\AnonymousFtpInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\AnonymousFtpInfoReturn $return
     * @return \Ovh\StructType\AnonymousFtpInfoResponse
     */
    public function setReturn(\Ovh\StructType\AnonymousFtpInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
