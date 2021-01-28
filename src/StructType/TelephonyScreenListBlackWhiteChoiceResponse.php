<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyScreenListBlackWhiteChoiceResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyScreenListBlackWhiteChoiceResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyScreenBlackWhiteChoiceReturn
     */
    public $return;
    /**
     * Constructor method for telephonyScreenListBlackWhiteChoiceResponse
     * @uses TelephonyScreenListBlackWhiteChoiceResponse::setReturn()
     * @param \Ovh\StructType\TelephonyScreenBlackWhiteChoiceReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyScreenBlackWhiteChoiceReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyScreenBlackWhiteChoiceReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyScreenBlackWhiteChoiceReturn $return
     * @return \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyScreenBlackWhiteChoiceReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
