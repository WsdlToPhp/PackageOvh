<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for responderEmailListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResponderEmailListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfResponderEmailStructType
     */
    public $return;
    /**
     * Constructor method for responderEmailListResponse
     * @uses ResponderEmailListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfResponderEmailStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfResponderEmailStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfResponderEmailStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfResponderEmailStructType $return
     * @return \Ovh\StructType\ResponderEmailListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfResponderEmailStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
