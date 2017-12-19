<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineListReturn extends AbstractStructBase
{
    /**
     * The link
     * @var \PayPal\ArrayType\MyArrayOfTelephonyLineStructType
     */
    public $link;
    /**
     * The alias
     * @var \PayPal\ArrayType\MyArrayOfTelephonyLineStructType
     */
    public $alias;
    /**
     * Constructor method for telephonyLineListReturn
     * @uses TelephonyLineListReturn::setLink()
     * @uses TelephonyLineListReturn::setAlias()
     * @param \PayPal\ArrayType\MyArrayOfTelephonyLineStructType $link
     * @param \PayPal\ArrayType\MyArrayOfTelephonyLineStructType $alias
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfTelephonyLineStructType $link = null, \PayPal\ArrayType\MyArrayOfTelephonyLineStructType $alias = null)
    {
        $this
            ->setLink($link)
            ->setAlias($alias);
    }
    /**
     * Get link value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyLineStructType|null
     */
    public function getLink()
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyLineStructType $link
     * @return \PayPal\StructType\TelephonyLineListReturn
     */
    public function setLink(\PayPal\ArrayType\MyArrayOfTelephonyLineStructType $link = null)
    {
        $this->link = $link;
        return $this;
    }
    /**
     * Get alias value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyLineStructType|null
     */
    public function getAlias()
    {
        return $this->alias;
    }
    /**
     * Set alias value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyLineStructType $alias
     * @return \PayPal\StructType\TelephonyLineListReturn
     */
    public function setAlias(\PayPal\ArrayType\MyArrayOfTelephonyLineStructType $alias = null)
    {
        $this->alias = $alias;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyLineListReturn
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
