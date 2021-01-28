<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberListPaginatedResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberListPaginatedResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedReturn
     */
    public $return;
    /**
     * Constructor method for telephonyAbbreviatedNumberListPaginatedResponse
     * @uses TelephonyAbbreviatedNumberListPaginatedResponse::setReturn()
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedReturn $return
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
