<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for automatedMailGetVolumeHistoryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutomatedMailGetVolumeHistoryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType
     */
    public $return;
    /**
     * Constructor method for automatedMailGetVolumeHistoryResponse
     * @uses AutomatedMailGetVolumeHistoryResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType $return
     * @return \Ovh\StructType\AutomatedMailGetVolumeHistoryResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfAutomatedMailGetVolumeHistoryStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
