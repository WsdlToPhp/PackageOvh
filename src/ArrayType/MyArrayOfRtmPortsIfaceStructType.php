<?php

namespace PayPal\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyArrayOfRtmPortsIfaceStructType ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MyArrayOfRtmPortsIfaceStructType extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\RtmPortsIfaceStruct[]
     */
    public $item;
    /**
     * Constructor method for MyArrayOfRtmPortsIfaceStructType
     * @uses MyArrayOfRtmPortsIfaceStructType::setItem()
     * @param \PayPal\StructType\RtmPortsIfaceStruct[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \PayPal\StructType\RtmPortsIfaceStruct[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\RtmPortsIfaceStruct[] $item
     * @return \PayPal\ArrayType\MyArrayOfRtmPortsIfaceStructType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $myArrayOfRtmPortsIfaceStructTypeItemItem) {
            // validation for constraint: itemType
            if (!$myArrayOfRtmPortsIfaceStructTypeItemItem instanceof \PayPal\StructType\RtmPortsIfaceStruct) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\RtmPortsIfaceStruct, "%s" given', is_object($myArrayOfRtmPortsIfaceStructTypeItemItem) ? get_class($myArrayOfRtmPortsIfaceStructTypeItemItem) : gettype($myArrayOfRtmPortsIfaceStructTypeItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\RtmPortsIfaceStruct $item
     * @return \PayPal\ArrayType\MyArrayOfRtmPortsIfaceStructType
     */
    public function addToItem(\PayPal\StructType\RtmPortsIfaceStruct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\RtmPortsIfaceStruct) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\RtmPortsIfaceStruct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PayPal\StructType\RtmPortsIfaceStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PayPal\StructType\RtmPortsIfaceStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PayPal\StructType\RtmPortsIfaceStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PayPal\StructType\RtmPortsIfaceStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PayPal\StructType\RtmPortsIfaceStruct|null
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
     * @return \PayPal\ArrayType\MyArrayOfRtmPortsIfaceStructType
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
