<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ripeReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RipeReturn extends AbstractStructBase
{
    /**
     * The inetnum
     * @var \PayPal\StructType\RipeInetnumStruct
     */
    public $inetnum;
    /**
     * The organisation
     * @var \PayPal\StructType\RipeOrganisationStruct
     */
    public $organisation;
    /**
     * Constructor method for ripeReturn
     * @uses RipeReturn::setInetnum()
     * @uses RipeReturn::setOrganisation()
     * @param \PayPal\StructType\RipeInetnumStruct $inetnum
     * @param \PayPal\StructType\RipeOrganisationStruct $organisation
     */
    public function __construct(\PayPal\StructType\RipeInetnumStruct $inetnum = null, \PayPal\StructType\RipeOrganisationStruct $organisation = null)
    {
        $this
            ->setInetnum($inetnum)
            ->setOrganisation($organisation);
    }
    /**
     * Get inetnum value
     * @return \PayPal\StructType\RipeInetnumStruct|null
     */
    public function getInetnum()
    {
        return $this->inetnum;
    }
    /**
     * Set inetnum value
     * @param \PayPal\StructType\RipeInetnumStruct $inetnum
     * @return \PayPal\StructType\RipeReturn
     */
    public function setInetnum(\PayPal\StructType\RipeInetnumStruct $inetnum = null)
    {
        $this->inetnum = $inetnum;
        return $this;
    }
    /**
     * Get organisation value
     * @return \PayPal\StructType\RipeOrganisationStruct|null
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
    /**
     * Set organisation value
     * @param \PayPal\StructType\RipeOrganisationStruct $organisation
     * @return \PayPal\StructType\RipeReturn
     */
    public function setOrganisation(\PayPal\StructType\RipeOrganisationStruct $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RipeReturn
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
