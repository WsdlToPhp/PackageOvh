<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ftpInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FtpInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\FtpInfoReturn
     */
    public $return;
    /**
     * Constructor method for ftpInfoResponse
     * @uses FtpInfoResponse::setReturn()
     * @param \Ovh\StructType\FtpInfoReturn $return
     */
    public function __construct(\Ovh\StructType\FtpInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\FtpInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\FtpInfoReturn $return
     * @return \Ovh\StructType\FtpInfoResponse
     */
    public function setReturn(\Ovh\StructType\FtpInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\FtpInfoResponse
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
