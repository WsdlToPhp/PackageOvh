<?php

namespace Ovh\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyArrayOfTelephonyAliasToLinePossibilityPriceStructType
 * ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MyArrayOfTelephonyAliasToLinePossibilityPriceStructType extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct[]
     */
    public $item;
    /**
     * Constructor method for MyArrayOfTelephonyAliasToLinePossibilityPriceStructType
     * @uses MyArrayOfTelephonyAliasToLinePossibilityPriceStructType::setItem()
     * @param \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct[] $item
     * @return \Ovh\ArrayType\MyArrayOfTelephonyAliasToLinePossibilityPriceStructType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $myArrayOfTelephonyAliasToLinePossibilityPriceStructTypeItemItem) {
            // validation for constraint: itemType
            if (!$myArrayOfTelephonyAliasToLinePossibilityPriceStructTypeItemItem instanceof \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct, "%s" given', is_object($myArrayOfTelephonyAliasToLinePossibilityPriceStructTypeItemItem) ? get_class($myArrayOfTelephonyAliasToLinePossibilityPriceStructTypeItemItem) : gettype($myArrayOfTelephonyAliasToLinePossibilityPriceStructTypeItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct $item
     * @return \Ovh\ArrayType\MyArrayOfTelephonyAliasToLinePossibilityPriceStructType
     */
    public function addToItem(\Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ovh\StructType\TelephonyAliasToLinePossibilityPriceStruct|null
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
     * @return \Ovh\ArrayType\MyArrayOfTelephonyAliasToLinePossibilityPriceStructType
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
