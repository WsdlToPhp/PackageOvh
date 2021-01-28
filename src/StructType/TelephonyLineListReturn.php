<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfTelephonyLineStructType
     */
    public $link;
    /**
     * The alias
     * @var \Ovh\ArrayType\MyArrayOfTelephonyLineStructType
     */
    public $alias;
    /**
     * Constructor method for telephonyLineListReturn
     * @uses TelephonyLineListReturn::setLink()
     * @uses TelephonyLineListReturn::setAlias()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineStructType $link
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineStructType $alias
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyLineStructType $link = null, \Ovh\ArrayType\MyArrayOfTelephonyLineStructType $alias = null)
    {
        $this
            ->setLink($link)
            ->setAlias($alias);
    }
    /**
     * Get link value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyLineStructType|null
     */
    public function getLink()
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineStructType $link
     * @return \Ovh\StructType\TelephonyLineListReturn
     */
    public function setLink(\Ovh\ArrayType\MyArrayOfTelephonyLineStructType $link = null)
    {
        $this->link = $link;
        return $this;
    }
    /**
     * Get alias value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyLineStructType|null
     */
    public function getAlias()
    {
        return $this->alias;
    }
    /**
     * Set alias value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineStructType $alias
     * @return \Ovh\StructType\TelephonyLineListReturn
     */
    public function setAlias(\Ovh\ArrayType\MyArrayOfTelephonyLineStructType $alias = null)
    {
        $this->alias = $alias;
        return $this;
    }
}
