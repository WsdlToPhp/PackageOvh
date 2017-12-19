<?php

namespace PayPal\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyArrayOfTelephonyHuntingInfoMemberStructType ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MyArrayOfTelephonyHuntingInfoMemberStructType extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\TelephonyHuntingInfoMemberStruct[]
     */
    public $item;
    /**
     * Constructor method for MyArrayOfTelephonyHuntingInfoMemberStructType
     * @uses MyArrayOfTelephonyHuntingInfoMemberStructType::setItem()
     * @param \PayPal\StructType\TelephonyHuntingInfoMemberStruct[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \PayPal\StructType\TelephonyHuntingInfoMemberStruct[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TelephonyHuntingInfoMemberStruct[] $item
     * @return \PayPal\ArrayType\MyArrayOfTelephonyHuntingInfoMemberStructType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $myArrayOfTelephonyHuntingInfoMemberStructTypeItemItem) {
            // validation for constraint: itemType
            if (!$myArrayOfTelephonyHuntingInfoMemberStructTypeItemItem instanceof \PayPal\StructType\TelephonyHuntingInfoMemberStruct) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\TelephonyHuntingInfoMemberStruct, "%s" given', is_object($myArrayOfTelephonyHuntingInfoMemberStructTypeItemItem) ? get_class($myArrayOfTelephonyHuntingInfoMemberStructTypeItemItem) : gettype($myArrayOfTelephonyHuntingInfoMemberStructTypeItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TelephonyHuntingInfoMemberStruct $item
     * @return \PayPal\ArrayType\MyArrayOfTelephonyHuntingInfoMemberStructType
     */
    public function addToItem(\PayPal\StructType\TelephonyHuntingInfoMemberStruct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\TelephonyHuntingInfoMemberStruct) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\TelephonyHuntingInfoMemberStruct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PayPal\StructType\TelephonyHuntingInfoMemberStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PayPal\StructType\TelephonyHuntingInfoMemberStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PayPal\StructType\TelephonyHuntingInfoMemberStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PayPal\StructType\TelephonyHuntingInfoMemberStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PayPal\StructType\TelephonyHuntingInfoMemberStruct|null
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
     * @return \PayPal\ArrayType\MyArrayOfTelephonyHuntingInfoMemberStructType
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