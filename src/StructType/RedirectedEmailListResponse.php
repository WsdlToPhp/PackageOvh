<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for redirectedEmailListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RedirectedEmailListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfEmailRedirectionStructType
     */
    public $return;
    /**
     * Constructor method for redirectedEmailListResponse
     * @uses RedirectedEmailListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfEmailRedirectionStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfEmailRedirectionStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfEmailRedirectionStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfEmailRedirectionStructType $return
     * @return \Ovh\StructType\RedirectedEmailListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfEmailRedirectionStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
