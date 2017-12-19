<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rpsMigrationGetProgressStatusReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RpsMigrationGetProgressStatusReturn extends AbstractStructBase
{
    /**
     * The step1
     * @var \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public $step1;
    /**
     * The step2
     * @var \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public $step2;
    /**
     * The step3
     * @var \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public $step3;
    /**
     * The step4
     * @var \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public $step4;
    /**
     * Constructor method for rpsMigrationGetProgressStatusReturn
     * @uses RpsMigrationGetProgressStatusReturn::setStep1()
     * @uses RpsMigrationGetProgressStatusReturn::setStep2()
     * @uses RpsMigrationGetProgressStatusReturn::setStep3()
     * @uses RpsMigrationGetProgressStatusReturn::setStep4()
     * @param \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step1
     * @param \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step2
     * @param \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step3
     * @param \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step4
     */
    public function __construct(\PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step1 = null, \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step2 = null, \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step3 = null, \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step4 = null)
    {
        $this
            ->setStep1($step1)
            ->setStep2($step2)
            ->setStep3($step3)
            ->setStep4($step4);
    }
    /**
     * Get step1 value
     * @return \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct|null
     */
    public function getStep1()
    {
        return $this->step1;
    }
    /**
     * Set step1 value
     * @param \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step1
     * @return \PayPal\StructType\RpsMigrationGetProgressStatusReturn
     */
    public function setStep1(\PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step1 = null)
    {
        $this->step1 = $step1;
        return $this;
    }
    /**
     * Get step2 value
     * @return \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct|null
     */
    public function getStep2()
    {
        return $this->step2;
    }
    /**
     * Set step2 value
     * @param \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step2
     * @return \PayPal\StructType\RpsMigrationGetProgressStatusReturn
     */
    public function setStep2(\PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step2 = null)
    {
        $this->step2 = $step2;
        return $this;
    }
    /**
     * Get step3 value
     * @return \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct|null
     */
    public function getStep3()
    {
        return $this->step3;
    }
    /**
     * Set step3 value
     * @param \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step3
     * @return \PayPal\StructType\RpsMigrationGetProgressStatusReturn
     */
    public function setStep3(\PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step3 = null)
    {
        $this->step3 = $step3;
        return $this;
    }
    /**
     * Get step4 value
     * @return \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct|null
     */
    public function getStep4()
    {
        return $this->step4;
    }
    /**
     * Set step4 value
     * @param \PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step4
     * @return \PayPal\StructType\RpsMigrationGetProgressStatusReturn
     */
    public function setStep4(\PayPal\StructType\RpsMigrationGetProgressStatusStepStruct $step4 = null)
    {
        $this->step4 = $step4;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RpsMigrationGetProgressStatusReturn
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
