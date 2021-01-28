<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportGetAllVisibleCategoriesResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportGetAllVisibleCategoriesResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSupportCategoryStructType
     */
    public $return;
    /**
     * Constructor method for supportGetAllVisibleCategoriesResponse
     * @uses SupportGetAllVisibleCategoriesResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSupportCategoryStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSupportCategoryStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSupportCategoryStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSupportCategoryStructType $return
     * @return \Ovh\StructType\SupportGetAllVisibleCategoriesResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSupportCategoryStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
