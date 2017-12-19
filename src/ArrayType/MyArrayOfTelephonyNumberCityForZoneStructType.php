<?php

namespace PayPal\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyArrayOfTelephonyNumberCityForZoneStructType ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MyArrayOfTelephonyNumberCityForZoneStructType extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\TelephonyNumberCityForZoneStruct[]
     */
    public $item;
    /**
     * Constructor method for MyArrayOfTelephonyNumberCityForZoneStructType
     * @uses MyArrayOfTelephonyNumberCityForZoneStructType::setItem()
     * @param \PayPal\StructType\TelephonyNumberCityForZoneStruct[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \PayPal\StructType\TelephonyNumberCityForZoneStruct[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TelephonyNumberCityForZoneStruct[] $item
     * @return \PayPal\ArrayType\MyArrayOfTelephonyNumberCityForZoneStructType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $myArrayOfTelephonyNumberCityForZoneStructTypeItemItem) {
            // validation for constraint: itemType
            if (!$myArrayOfTelephonyNumberCityForZoneStructTypeItemItem instanceof \PayPal\StructType\TelephonyNumberCityForZoneStruct) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\TelephonyNumberCityForZoneStruct, "%s" given', is_object($myArrayOfTelephonyNumberCityForZoneStructTypeItemItem) ? get_class($myArrayOfTelephonyNumberCityForZoneStructTypeItemItem) : gettype($myArrayOfTelephonyNumberCityForZoneStructTypeItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TelephonyNumberCityForZoneStruct $item
     * @return \PayPal\ArrayType\MyArrayOfTelephonyNumberCityForZoneStructType
     */
    public function addToItem(\PayPal\StructType\TelephonyNumberCityForZoneStruct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\TelephonyNumberCityForZoneStruct) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\TelephonyNumberCityForZoneStruct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PayPal\StructType\TelephonyNumberCityForZoneStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PayPal\StructType\TelephonyNumberCityForZoneStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PayPal\StructType\TelephonyNumberCityForZoneStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PayPal\StructType\TelephonyNumberCityForZoneStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PayPal\StructType\TelephonyNumberCityForZoneStruct|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string item
     */
    public function getAttributeName()
    {
        return 'item';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\ArrayType\MyArrayOfTelephonyNumberCityForZoneStructType
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
