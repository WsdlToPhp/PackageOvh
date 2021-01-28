<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for crontabInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CrontabInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\CrontabInfoReturn
     */
    public $return;
    /**
     * Constructor method for crontabInfoResponse
     * @uses CrontabInfoResponse::setReturn()
     * @param \Ovh\StructType\CrontabInfoReturn $return
     */
    public function __construct(\Ovh\StructType\CrontabInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\CrontabInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\CrontabInfoReturn $return
     * @return \Ovh\StructType\CrontabInfoResponse
     */
    public function setReturn(\Ovh\StructType\CrontabInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
