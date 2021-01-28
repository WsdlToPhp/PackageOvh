<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ortDomainListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrtDomainListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfOrtStructType
     */
    public $return;
    /**
     * Constructor method for ortDomainListResponse
     * @uses OrtDomainListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfOrtStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfOrtStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfOrtStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfOrtStructType $return
     * @return \Ovh\StructType\OrtDomainListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfOrtStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
