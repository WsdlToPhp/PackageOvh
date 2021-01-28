<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cmsListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CmsListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfCmsStructType
     */
    public $return;
    /**
     * Constructor method for cmsListResponse
     * @uses CmsListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfCmsStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfCmsStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfCmsStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfCmsStructType $return
     * @return \Ovh\StructType\CmsListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfCmsStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
