<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySviInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySviInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySviInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonySviInfoResponse
     * @uses TelephonySviInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonySviInfoReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonySviInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySviInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySviInfoReturn $return
     * @return \Ovh\StructType\TelephonySviInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySviInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
