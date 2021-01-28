<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookOnGroupContactAddResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookOnGroupContactAddResponse extends AbstractStructBase
{
    /**
     * The return
     * @var int
     */
    public $return;
    /**
     * Constructor method for telephonyPhonebookOnGroupContactAddResponse
     * @uses TelephonyPhonebookOnGroupContactAddResponse::setReturn()
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
     * @return \Ovh\StructType\TelephonyPhonebookOnGroupContactAddResponse
     */
    public function setReturn($return = null)
    {
        // validation for constraint: int
        if (!is_null($return) && !(is_int($return) || ctype_digit($return))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        return $this;
    }
}
