<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyGetCitiesFromZipResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetCitiesFromZipResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyCitiesFromZipStructType
     */
    public $return;
    /**
     * Constructor method for telephonyGetCitiesFromZipResponse
     * @uses TelephonyGetCitiesFromZipResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyCitiesFromZipStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyCitiesFromZipStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyCitiesFromZipStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyCitiesFromZipStructType $return
     * @return \Ovh\StructType\TelephonyGetCitiesFromZipResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyCitiesFromZipStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
