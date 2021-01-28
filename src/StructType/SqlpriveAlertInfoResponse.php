<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveAlertInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveAlertInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\SqlpriveAlertInfotReturn
     */
    public $return;
    /**
     * Constructor method for sqlpriveAlertInfoResponse
     * @uses SqlpriveAlertInfoResponse::setReturn()
     * @param \Ovh\StructType\SqlpriveAlertInfotReturn $return
     */
    public function __construct(\Ovh\StructType\SqlpriveAlertInfotReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\SqlpriveAlertInfotReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\SqlpriveAlertInfotReturn $return
     * @return \Ovh\StructType\SqlpriveAlertInfoResponse
     */
    public function setReturn(\Ovh\StructType\SqlpriveAlertInfotReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
