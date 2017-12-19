<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfCmsAvailableStructType
     */
    public $return;
    /**
     * Constructor method for cmsAvailableListResponse
     * @uses CmsAvailableListResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfCmsAvailableStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfCmsAvailableStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfCmsAvailableStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfCmsAvailableStructType $return
     * @return \PayPal\StructType\CmsAvailableListResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfCmsAvailableStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CmsAvailableListResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
