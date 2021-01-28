<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for responderEmailInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResponderEmailInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\ResponderEmailStruct
     */
    public $return;
    /**
     * Constructor method for responderEmailInfoResponse
     * @uses ResponderEmailInfoResponse::setReturn()
     * @param \Ovh\StructType\ResponderEmailStruct $return
     */
    public function __construct(\Ovh\StructType\ResponderEmailStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\ResponderEmailStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\ResponderEmailStruct $return
     * @return \Ovh\StructType\ResponderEmailInfoResponse
     */
    public function setReturn(\Ovh\StructType\ResponderEmailStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
