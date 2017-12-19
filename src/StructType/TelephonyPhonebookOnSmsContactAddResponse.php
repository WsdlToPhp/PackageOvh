<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookOnSmsContactAddResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookOnSmsContactAddResponse extends AbstractStructBase
{
    /**
     * The return
     * @var int
     */
    public $return;
    /**
     * Constructor method for telephonyPhonebookOnSmsContactAddResponse
     * @uses TelephonyPhonebookOnSmsContactAddResponse::setReturn()
     * @param int $return
     */
    public function __construct($return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return int|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param int $return
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsContactAddResponse
     */
    public function setReturn($return = null)
    {
        // validation for constraint: int
        if (!is_null($return) && !is_numeric($return)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($return)), __LINE__);
        }
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyPhonebookOnSmsContactAddResponse
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
