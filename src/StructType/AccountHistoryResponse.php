<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountHistoryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccountHistoryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\AccountHistoryReturn
     */
    public $return;
    /**
     * Constructor method for accountHistoryResponse
     * @uses AccountHistoryResponse::setReturn()
     * @param \Ovh\StructType\AccountHistoryReturn $return
     */
    public function __construct(\Ovh\StructType\AccountHistoryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\AccountHistoryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\AccountHistoryReturn $return
     * @return \Ovh\StructType\AccountHistoryResponse
     */
    public function setReturn(\Ovh\StructType\AccountHistoryReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
