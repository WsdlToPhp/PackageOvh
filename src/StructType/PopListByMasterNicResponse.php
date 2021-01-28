<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for popListByMasterNicResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PopListByMasterNicResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfPopStructType
     */
    public $return;
    /**
     * Constructor method for popListByMasterNicResponse
     * @uses PopListByMasterNicResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfPopStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfPopStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfPopStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfPopStructType $return
     * @return \Ovh\StructType\PopListByMasterNicResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfPopStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
