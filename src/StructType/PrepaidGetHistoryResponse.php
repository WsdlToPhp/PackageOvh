<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidGetHistoryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidGetHistoryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\PrepaidGetHistoryReturn
     */
    public $return;
    /**
     * Constructor method for prepaidGetHistoryResponse
     * @uses PrepaidGetHistoryResponse::setReturn()
     * @param \Ovh\StructType\PrepaidGetHistoryReturn $return
     */
    public function __construct(\Ovh\StructType\PrepaidGetHistoryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\PrepaidGetHistoryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\PrepaidGetHistoryReturn $return
     * @return \Ovh\StructType\PrepaidGetHistoryResponse
     */
    public function setReturn(\Ovh\StructType\PrepaidGetHistoryReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
