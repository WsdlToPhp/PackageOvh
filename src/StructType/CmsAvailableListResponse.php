<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cmsAvailableListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CmsAvailableListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfCmsAvailableStructType
     */
    public $return;
    /**
     * Constructor method for cmsAvailableListResponse
     * @uses CmsAvailableListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfCmsAvailableStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfCmsAvailableStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfCmsAvailableStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfCmsAvailableStructType $return
     * @return \Ovh\StructType\CmsAvailableListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfCmsAvailableStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
