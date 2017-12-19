<?php

namespace PayPal\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyArrayOfEmailFilterRuleStructType ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MyArrayOfEmailFilterRuleStructType extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\EmailFilterRuleStruct[]
     */
    public $item;
    /**
     * Constructor method for MyArrayOfEmailFilterRuleStructType
     * @uses MyArrayOfEmailFilterRuleStructType::setItem()
     * @param \PayPal\StructType\EmailFilterRuleStruct[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \PayPal\StructType\EmailFilterRuleStruct[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\EmailFilterRuleStruct[] $item
     * @return \PayPal\ArrayType\MyArrayOfEmailFilterRuleStructType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $myArrayOfEmailFilterRuleStructTypeItemItem) {
            // validation for constraint: itemType
            if (!$myArrayOfEmailFilterRuleStructTypeItemItem instanceof \PayPal\StructType\EmailFilterRuleStruct) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\EmailFilterRuleStruct, "%s" given', is_object($myArrayOfEmailFilterRuleStructTypeItemItem) ? get_class($myArrayOfEmailFilterRuleStructTypeItemItem) : gettype($myArrayOfEmailFilterRuleStructTypeItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\EmailFilterRuleStruct $item
     * @return \PayPal\ArrayType\MyArrayOfEmailFilterRuleStructType
     */
    public function addToItem(\PayPal\StructType\EmailFilterRuleStruct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\EmailFilterRuleStruct) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\EmailFilterRuleStruct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PayPal\StructType\EmailFilterRuleStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PayPal\StructType\EmailFilterRuleStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PayPal\StructType\EmailFilterRuleStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PayPal\StructType\EmailFilterRuleStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PayPal\StructType\EmailFilterRuleStruct|null
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
     * @return \PayPal\ArrayType\MyArrayOfEmailFilterRuleStructType
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