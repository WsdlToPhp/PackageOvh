<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailFilterListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailFilterListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfEmailFilterStructType
     */
    public $return;
    /**
     * Constructor method for emailFilterListResponse
     * @uses EmailFilterListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfEmailFilterStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfEmailFilterStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfEmailFilterStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfEmailFilterStructType $return
     * @return \Ovh\StructType\EmailFilterListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfEmailFilterStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
